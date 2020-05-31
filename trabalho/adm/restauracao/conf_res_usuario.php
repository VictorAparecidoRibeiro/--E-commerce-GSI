<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8" />
 <title>RESTAURAÇÃO</title>
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
	 <div id= "con_restaurar">
		 <h1>USUARIOS PARA RESTAURAR </h1> 
		 <HR>
	

					<?php

						 include "conectar.php";

						$login=$_GET["login"];
						
						$sql= " select * from usuarios where login = '$login' ";

						$resultado=pg_query($conecta,$sql);
						$qtde=pg_num_rows($resultado);

						if ( $qtde == 0 )
						{
							echo "Usuario nao encontrado !!!<br><br>";
							exit;
						}
						
						$linha = pg_fetch_row($resultado);
					?>
					<CENTER>
					  <H4>CONFIRMAÇÃO DOS DADOS DO USUARIO PARA RESTAURACÃO</H4>
					</CENTER>
					<hr>
					
					
								 <div id="formulario">
			<form action="restauracao.php" method="post" align="left" >
			 
			   <div id="campo_texto">Login:*</div> 
			   
			   <div id="campo_input">

					<input type="text" name="login"
					value="<?php echo $linha[0]; ?>" readonly>

				</div>
				
				<div id="campo_texto">Nome:*</div> 

				<div id="campo_input">

					<input type="text" name="nome"
					value="<?php echo $linha[1]; ?>" readonly>
					
				</div>
				
				
				<div id="campo_texto">Sobrenome:*</div> 
				
				<div id="campo_input">

					<input type="text" name="sobrenome"
					value="<?php echo $linha[2]; ?>" readonly>
					
				</div>
				
			    <div id="campo_texto">Data de Nascimento:*</div> 

				<div id="campo_input">

					<input type="text" name="data_nasc"
					value="<?php echo $linha[5]; ?>" readonly>
				
				</div>
				
				<div id="campo_texto">Gênero:*</div> 

				<div id="campo_input">
				
					<input type="text" name="genero"
					value="<?php echo $linha[8]; ?>" readonly>
					
				</div>
				
				<div id="campo_texto">E-Mail:*</div> 
		
				<div id="campo_input">
		
					<input type="text" name="email"
					value="<?php echo $linha[9]; ?>" readonly>

				</div>	
				
				<input type="submit" value="Confirma RESTAURACÃO">
				<input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 


				
				</div>			
				
			</form>

</div>
 </center>
			 
			 
 </body>
 
</html>
