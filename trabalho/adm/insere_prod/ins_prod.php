<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8" />
 <title>Cadastro Tabela Produtos - ADM </title>
  <link rel= "stylesheet" type= "text/css" href= "estilo_adm.css"/>
  
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
	<div id= "ins_prod">
	<h1>PRODUTOS</h1> 
	<HR>
	
 
 
 
			 <h4>CADASTRO TABELA PRODUTOS - ADM </h4>
			 <hr>
			 
				 <form action="insere_prod.php" method="post" align="left">
				 	 
				<div id="atributos">
							 
								<div class="A">
									 <DIV CLASS="B">
									 Nome*:
									 </DIV>
										 <div class="C">
										 <input type="text" name="nome" id="nome"required /> 
										 </div>
								
								 </div>
								 <br>
								 <div class="A">
								  
										 <DIV CLASS="B">
										  Cor*: 
										 </DIV>
										 
										 <div class="C">
										  <input type="integer" name="cor" id="cor" required/> 
										 </div>
									 
									 
								 </div>
								 <br>
								 
								 <div class="A">
								  
										 <DIV CLASS="B">
										   Quantidade*: 
										 </DIV>
										 
										 <div class="C">
										  <input type="integer" name="qtde" id="qtde" required/>
										 </div>
									 
									 
								 </div>
								 <br>
								 <div class="A">
								  
										 <DIV CLASS="B">
										    Tamanho*:
										 </DIV>
										 
										 <div class="C">
										   <input type="integer" name="tamanho" id="tamanho" required/> 
										 </div>
									 
									 
								 </div>
								 <br>
								  <div class="A">
								  
										 <DIV CLASS="B">
										   Enfeite*:
										 </DIV>
										 
										 <div class="C">
										   <input type="integer" name="enfeite" id="enfeite" required /> 
										 </div>
									 
									 
								 </div>
								 <br>
								  <div class="A">
								  
										 <DIV CLASS="B">
										   Imagem*:
										 </DIV>
										 
										 <div class="C">
										  <input type="text" max="25" name="imagem" id="imagem" required /> 
										 </div>
									 
									 
								 </div>
								 <br>
								   <div class="A">
								  
										 <DIV CLASS="B">
										    Descriçaõ*:
										 </DIV>
										 
										 <div class="C">
										  
							   <input type="text" max="100" name="descricao" id="descricao" required /> 
										 </div>
									 
									 
								 </div>
								 <br>
								 	<div class="A">
								  
										 <DIV CLASS="B">
											Valor*:
										 </DIV>
										 
										 <div class="C">
										  
							   <input type="number"  name="valor" step="0.01" id="valor" required /> 
										 </div>
									 
									 
								 </div>
								 
								 	
								 
								 
								 
								 
				<div> 
						<br>
					 <input type="submit" name="button" id="button" value="Enviar" />
					 <input type="reset" name="button" id="button" value="Limpar" />
					 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
				 </form>
				 
				 
				 
			</div>
		</center>	 
				 
 </body>
</html>