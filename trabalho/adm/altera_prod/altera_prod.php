<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8" />
 
 <title>Altera no BD produtos </title>
 <link rel= "stylesheet" type= "text/css" href= "estilo456.css"/>
 
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
  
 <div id="mae_altprod">
 
 <h1>ALTERA PRODUTOS</h1> 
 <HR>
 <p align="left">
				
				 <?php
                     $nome=strtolower($_GET['nome']);
					 include "conectar.php";
					 $sql="select * from produtos where nome like '%$nome%' and excluido='n' order by id_produto";
					 $resultado= pg_query($conecta, $sql);
					 $qtde=pg_num_rows($resultado);
					$quantidade = pg_affected_rows($resultado);
							 $total_paginas = ceil($quantidade/10);
							 
							 ?>
                            <p align="left">        
                                    Pesquisar:</p>
                                    <form align="left" method="GET" action="altera_prod.php">
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
					 echo "Produtos Encontrados<br><br>";
						 for ($cont=1; $cont <= 10; $cont++)
						 {
						$linha = pg_fetch_array($resultado,$contador_valores++);

						 echo "Id_produto...: ".$linha['id_produto']."<br>";
						 echo "Nome.........: ".$linha['nome']."<br>";
						 echo "Cor..........: ".$linha['cor']."<br>";
						 echo "Qtde.........: ".$linha['qtde']."<br>";
						 echo "Tamanho......: ".$linha['tamanho']."<br>";
						 echo "Enfeite......: ".$linha['enfeite']."<br>";
						 echo "Imagem.......: ".$linha['imagem']."<br>";
						 echo "Descricao....: ".$linha['descricao']."<br>";
						 echo "<a href='altera_prod_lista.php?id_produto=".$linha[id_produto]."'>
						Alterar</a><br><br>";
						
						if($pagina * 10 - 10 + $cont >= $quantidade)
										break;
								
						}

								$pagina++;

								foreach(range(1,$total_paginas)as $mostra_paginas)
								{
									echo "  <a href=altera_prod.php?pagina=".$mostra_paginas.">   ".$mostra_paginas."</a>";
								}

					 }
					 else
						echo "Não foi encontrado nenhum produto !!!<br><br>";
				 ?>
				
				 
				 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
				 
			</p>
		      
			</div>
 </center>
 
 
 	
 </body>
</html>
