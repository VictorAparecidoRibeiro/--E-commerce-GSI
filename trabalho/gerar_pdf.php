<?php
    session_start();
    include('pdf/mpdf.php');
    include "conectar.php";
    
    $sql="SELECT c.cod_compra, c.data_compra, c.total, c.login, pc.id_produto, pc.qtde, pc.total, p.nome, p.imagem
		FROM compra c
		JOIN produtos_compra pc ON c.cod_compra=pc.cod_compra
		JOIN  produtos p ON pc.id_produto=p.id_produto
		WHERE c.cod_compra=".$_GET['cod']."
		ORDER by p.nome";
		$resultado= pg_query($conecta, $sql);
		$qtde=pg_num_rows($resultado);
        $produtos="";
		for ($cont=0; $cont < $qtde; $cont++)
		{
			$linha=pg_fetch_array($resultado);
			$produtos=$produtos." <h4>Nome: ".$linha['nome']."</h4>
            <h4>Quantidade: ".$linha['qtde']." Subtotal:  ".$linha[6]."</h4>";
		}
    $data=date("d/m/Y", strtotime($linha['data_compra']));
    $pagina=
        "<html>
            <body>
                <h1>Relatório de Compra</h1>
                <h2>Obrigado ".$_SESSION['login']."!</h2>
                <h3>Código da Compra: ".$linha['cod_compra']."</hr>
                <h3>Data da Compra: ".$data."</h3>
                <h3>Produtos:</h3>
                ".$produtos."
                <h3>Total: ".$linha[2]."</h3>
            </body>
        </html>";
        
    $arquivo="Compra".$_GET[''].".pdf";
    $mpdf=new mPDF();
    $mpdf->WriteHTML($pagina);
    
    $mpdf->Output($arquivo, 'I');
?>