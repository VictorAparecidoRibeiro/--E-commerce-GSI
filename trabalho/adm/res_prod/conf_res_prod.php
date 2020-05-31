<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8" />
 
 <title>Produtos</title>
 <link rel= "stylesheet" type= "text/css" href= "estilo.css"/>
 
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
 <div id= "mae_conres">
 <h1>RESTAURAR PRODUTO</h1> 
 <hr>
 <h3>dados do produto para restaurar </h3>
 <HR>




			<?php



				
					
				if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
				{ //significa que o usuário não foi autenticado, então, volta para index
					echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
					echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
					exit;
						
				}

				 include "conectar.php";

				$id_produto=$_GET["id_produto"];
				
				$sql= " select * from produtos where id_produto = '$id_produto' ";

				$resultado=pg_query($conecta,$sql);
				$qtde=pg_num_rows($resultado);

				if ( $qtde == 0 )
				{
					echo " produto nao encontrado !!!<br><br>";
					exit;
				}
				
				$linha = pg_fetch_row($resultado);
			?>
			<div id="atributos">
					<form action="restauração_prod.php" method="post" align="left">
					   <br>
						
								<div class="A">
								  
										 <DIV CLASS="B">
										   Nome: 
										 </DIV>
										 
										 <div class="C">
										  <input type="text" name="nome" value="<?php echo $linha[1]; ?>" readonly><br>
										 </div>
									 
									 
								 </div>
								 <br>
								 <div class="A">
								  
										 <DIV CLASS="B">
										   Cor: 
										 </DIV>
										 
										 <div class="C">
										  <input type="text" name="cor" value="<?php echo $linha[2]; ?>" readonly><br>
										 </div>
									 
									 
								 </div>
								 <br>
								  <div class="A">
								  
										 <DIV CLASS="B">
										   Quantidade: 
										 </DIV>
										 
										 <div class="C">
										  <input type="text" name="quantidade" value="<?php echo $linha[3]; ?>" readonly><br>
										 </div>
									 
									 
								 </div>
								 <br>
								  <div class="A">
								  
										 <DIV CLASS="B">
										   Tamanho: 
										 </DIV>
										 
										 <div class="C">
										  <input type="text" name="tamanho" value="<?php echo $linha[4]; ?>" readonly><br>
										 </div>
									 
									 
								 </div>
								 <br>
								  <div class="A">
								  
										 <DIV CLASS="B">
										   Enfeite: 
										 </DIV>
										 
										 <div class="C">
										  <input type="text" name="enfeite" value="<?php echo $linha[5]; ?>" readonly><br>
										 </div>
									 
									 
								 </div>
								  <br>
								  <div class="A">
								  
										 <DIV CLASS="B">
										   Valor: 
										 </DIV>
										 
										 <div class="C">
										  <input type="text" name="valor" value="<?php echo $linha[9]; ?>" readonly><br>
										 </div>
									 
									 
								 </div>
		
						<br><input type="submit" value="Confirma RESTAURACÃO">
						<input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 

					</form>
			</div>
		
	</div>
 </center>	 
			 
			
 </body>
</html>	
			
			
			
			