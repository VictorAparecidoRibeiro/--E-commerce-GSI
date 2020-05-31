<!DOCTYPE PHP>
<html>
<head>
    <meta charset="UTF-8">
	<title>Inserir Tamanho</title>
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
 <div id= "mae_usuarios">
<h1>Cadastro na tabela de tamanho</h1>
 <HR>
 <p align="left">
<form action="InserirTamanho.php" method="GET">
 <p align="left">
<strong>Tamanho:</strong>

<label>
       <input type="text" name="tamanho" id="tamanho" name="tamanho"/><br/>
</label>
</p>

 <p align="left">
 <input type="submit" name="button" id="button" value="Enviar" />
 </p>
</form>
 
</body>
</p>
		 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
	</div>
 </center>
</html>