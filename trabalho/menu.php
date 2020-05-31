<?php
	session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
		exit;
			
	}
	
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title>Menu Principal</title>
</head>
<body>
	<!-- script foi chamado de checarlogin.php -->
	<center>
	<h4>*** Menu ***</h4>
	<h2>Bem-vindo(a) <?php echo $_SESSION["login"]; ?></h2>
	<br><br>
	<a href="index.php"> Início </a><br>
	<a href="pesquisar.php">Pesquisar</a><br><br>
	<a href="manutencao.php">Incluir</a>
	<a href="http://200.145.153.175/victorribeiro/trabalho/adm/adm.php">PARTE ADMIN</a>
	</center>
</body>
</html>