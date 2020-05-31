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
	<div id= "exc_prod">
	<h1>PRODUTOS</h1> 
	<HR>



				<?php

					 include "conectar.php";

					$id_produto =$_GET["id_produto"];
					
					$sql= " select * from produtos where id_produto = '$id_produto' ";
					$resultado=pg_query($conecta,$sql);
					$qtde=pg_num_rows($resultado);
					
					if ( $qtde == 0 )
					{
						echo "Usuario nao encontrado !!!<br><br>";
						exit;
					}
					
					$linha = pg_fetch_row($resultado);
					
				?>
				
				<form action="exclui_prod.php" method="post" align="left">
				   <br>
				   <div id="atributos">
				   	
							 
								<div class="A">
									 <DIV CLASS="B">
									 Nome:
									 </DIV>
									 
										 <div class="C">
										 
										 <input type="text" name="nome" value="<?php echo $linha[1] ; ?>" readonly>
										 
										 </div>
								
								 </div>
								 <br>
								 <div class="A">
									 <DIV CLASS="B">
									 Cor:
									 </DIV>
										 <div class="C">
										 <input type="text" name="cor" value="<?php echo $linha[2] ; ?>" readonly>
										 </div>
								
								 </div>
								 <br>
								 <div class="A">
									 <DIV CLASS="B">
									 Quantidade:
									 </DIV>
										 <div class="C">
										 <input type="text" name="qtde" value="<?php echo $linha[3] ; ?>" readonly>
										 </div>
								
								 </div>
								 <br>
								 <div class="A">
									 <DIV CLASS="B">
									 Tamanho:
									 </DIV>
										 <div class="C">
										 <input type="text" name="tamanho" value="<?php echo $linha[4] ; ?>" readonly>
										 </div>
								
								 </div>
								  <br>
								 <div class="A">
									 <DIV CLASS="B">
									 Enfeite:
									 </DIV>
										 <div class="C">
										 <input type="text" name="enfeite" value="<?php echo $linha[5] ; ?>" readonly>
										 </div>
								
								 </div>
								 <br>
								 <div class="A">
									 <DIV CLASS="B">
									 Valor:
									 </DIV>
										 <div class="C">
										 <input type="text" name="valor" value="<?php echo $linha[9] ; ?>" readonly>
										 </div>
								
								 </div>
								 
								 </div>
								 
                    
				   
				   
				   
					
					
							<?php 
							 if($linha[3] != 0)
							 {
									?>	<input type="submit" value="Confirma EXCLUSÃO">
									<?php
									
									
							 }
							 else
							 {
								 echo "Quantidade igual a zero!! ";
							 }
							?>					
							  <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 

						</form>
				
		</div>
 </center>
				
 </body>
</html>
