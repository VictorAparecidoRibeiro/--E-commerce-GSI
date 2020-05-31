<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8" />
 <title>PRODUTOS</title>
 <link rel= "stylesheet" type= "text/css" href= "estilo1234.css"/>
 
 <?php
	
			session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	
	
	?>
 
 
 </head>
 <body>
 
 
     <center>
	<div id= "Produtos">
	<h1>PRODUTOS</h1> 
	<HR>
	<p align="left">
 
				 <?php
                     $nome=strtolower($_GET['nome']);
					 include "conectar.php";
					 session_start();
					 $sql="select * from produtos where nome like '%$nome%' and excluido='n';";
					 $resultado= pg_query($conecta, $sql);
					 $qtde=pg_num_rows($resultado);
					 
			$quantidade = pg_affected_rows($resultado);
			 $total_paginas = ceil($quantidade/10);			 
			

			 ?>
            <p align="left">        
                    Pesquisar:</p>
                    <form align="left" method="GET" action="produtos.php">
                        Nome:
                         <input type="textbox" id="nome" name="nome">
                        <input type="submit" value="Pesquisar">
                    </form>

             <p align="left"> 
            <?php
			 
			 
			 
			 if ($qtde > 0)
			 {
				 if(isset($_GET['pagina']))
				{
					$pagina = $_GET['pagina'];
					
				}
				
				else
				{
					$pagina = 1;

				}
				
				
					if($pagina != 1)
						$contador_valores = ($pagina * 10) - 10;

					else
						$contador_valores = 0;

					 echo "Produtos encontrados com sucesso :<br><br>";
						for ($cont=1; $cont <= 10; $cont++)
						{
						
							
							$linha = pg_fetch_array($resultado,$contador_valores++);
							
							echo "NOME....: ".$linha['nome']."<br>";
							 echo "COR....: ".$linha['cor']."<br>";
							 echo "QTDE....: ".$linha['qtde']."<br>";
							  echo "TAMANHO....: ".$linha['tamanho']."<br>";
							   echo "ENFEITE....: ".$linha['enfeite']."<br>";
								echo "IMAGEM....: ".$linha['imagem']."<br>";
								 echo "DESCRIÇÂO....: ".$linha['descricao']."<br>";
							 echo "VALOR....: ".$linha['valor']."<br>";	 

							
							echo "<a href='exclui.php?id_produto=$linha[id_produto]'> EXCLUSÃO </a> <br><br>";
						
						
							if($pagina * 10 - 10 + $cont >= $quantidade)
								break;
						
						}
						
						$pagina++;

						foreach(range(1,$total_paginas)as $mostra_paginas)
						{
							echo "  <a href=produtos.php?pagina=".$mostra_paginas.">   ".$mostra_paginas."</a>";
						}
						
				}
					else
					{
						echo "Não foi encontrado nenhum usuario !!!<br><br>";
					}
					
					
				 ?>
				<input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
</div>
 </center>
				
				
 </body>
</html>
