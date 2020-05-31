<!DOCTYPE html>
<html lang="pt-br">
<head>
      <title>Histórico de compra</title>
	  <meta charset="utf-8">
</head>
<body>
<?php
session_start();
include "conectar.php";
include "recebeloguin.php";

$sql="SELECT c.cod_compra, c.data_compra, c.total, c.login, pc.id_produto, pc.qtde, pc.total, p.nome, p.imagem
		FROM compra c
		JOIN produtos_compra pc ON c.cod_compra=pc.cod_compra
		JOIN  produtos p ON pc.id_produto=p.id_produto
		WHERE c.login='".$_SESSION['login']."'
		ORDER by p.nome";
		$resultado= pg_query($conecta, $sql);
		$qtde=pg_num_rows($resultado);
        $produtos="";
		for ($cont=0; $cont < $qtde; $cont++)
		{
			$linha=pg_fetch_array($resultado);
			$produtos=$produtos." <h4>Nome: ".$linha['nome']."</h4>
            <h4>Quantidade: ".$linha['qtde']." Subtotal:  ".$linha[6]."</h4>";
			$total+=$linha[6];
		}
    $data=date("d/m/Y", strtotime($linha['data_compra']));

	
	            echo"<h1>Relatório de Compra</h1>";
                echo"<h2>Obrigado&nbsp".$_SESSION['login']."!</h2>";
                echo"<h3>Código da Compra: ".$linha['cod_compra']."</hr>";
                echo"<h3>Data da Compra:".$data."</h3>";
                echo"<h3>Produtos:</h3>";
				echo"".$produtos."";
                echo"<h3>Total: R$".$total."</h3>";
?>

                
            </body>
		
</html>