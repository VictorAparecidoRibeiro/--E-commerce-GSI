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
  
 <div id="mae_conf1">
 
		 <h1>ALTERA PRODUTOS</h1> 
		 <HR>

						<?php
							include "conectar.php";
							//dados enviados do script altera_prod.php
							$id_produto = $_GET["id_produto"];
							$sql="select * from produtos where id_produto = $id_produto";
							$resultado=pg_query($conecta,$sql);
							$qtde=pg_num_rows($resultado);
							if ( $qtde == 0 )
							{
							echo "Produto nao encontrado !!!<br><br>";
							exit;
							}
							$linha = pg_fetch_array($resultado);
						?>
						<form action="grava_prod_alterado.php" method="post" align="left">
							
							<div id="atributos">
									 
										<div class="A">
											 <DIV CLASS="B">
											 Id_produto:
											 </DIV>
												 <div class="C">
												   <input type="integer" name="id_produto" value="<?php echo $linha[id_produto]; ?>" readonly>
												 </div>
										
										 </div>
										 <br>
										 <div class="A">
											 <DIV CLASS="B">
											 Nome:
											 </DIV>
												 <div class="C">
													<input type="text" max="25" name="nome" value="<?php echo $linha[nome]; ?>">
												 </div>
										
										 </div>
										 <br>
										  <div class="A">
											 <DIV CLASS="B">
											 Cor:
											 </DIV>
												 <div class="C">
												   <input type="integer" name="cor" value="<?php echo $linha[cor]; ?>" readonly >
												 </div>
										
										 </div>
										 <br>
										  <div class="A">
											 <DIV CLASS="B">
											 Quantidade:
											 </DIV>
												 <div class="C">
													<input type="integer" name="qtde" value="<?php echo $linha[qtde]; ?>">
												 </div>
										
										 </div>
										 <br>
										 <div class="A">
											 <DIV CLASS="B">
											 Tamanho:
											 </DIV>
												 <div class="C">
													<input type="integer" name="tamanho" value="<?php echo $linha[tamanho]; ?>" readonly>
												 </div>
										
										 </div>
										 <br>
										  <div class="A">
											 <DIV CLASS="B">
											  Enfeite :
											 </DIV>
												 <div class="C">
												  <input type="integer" name="enfeite" value="<?php echo $linha[enfeite]; ?>" readonly><br>
												 </div>
										
										 </div>
										 <br>
										 
										 <div class="A">
											 <DIV CLASS="B">
											  Imagem:
											 </DIV>
												 <div class="C">
												   <input type="text" max="25" name="imagem" value="<?php echo $linha[imagem]; ?>" >
												 </div>
										
										 </div>
										 <br>
										 <div class="A">
											 <DIV CLASS="B">
											  Descrição:
											 </DIV>
												 <div class="C">
												   <input type="text" max="100" name="descricao" value="<?php echo $linha[descricao]; ?>" >
												 </div>
										
										 </div>
							
							
							</div>
							
							<input type="submit" value="Gravar">
							<input type="reset" value="limpar">
							
						</form>
							 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
							 
		</div>
	</center>

 </body>
</html>					 
					 
					 