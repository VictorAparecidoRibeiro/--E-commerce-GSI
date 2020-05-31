<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
	
			session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	
	
	?>



	<meta charset="UTF-8">
	<link rel= "stylesheet" type= "text/css" href= "estilo_adm.css"/>
	</head>
<body>
    <center>
	<div id="mae_adm">
	  <h1>BEM VINDO ADMINISTRADOR!!</h1>
	  
	<div id="barra_adm" >
	
	<a class="link_adm" href="../index.php"> <div class="link_adm" id="btn"> Inicio </div></a>
	

	
	
	
	</div>
	  <a  target=_blank href="http://200.145.153.175/victorribeiro/trabalho/adm/novo/index.php">  Gráfico 1 </a>
	  <a  target=_blank href="http://200.145.153.175/victorribeiro/trabalho/adm/novo/index2.php">  Gráfico 2 </a>
      <a  target=_blank href="http://200.145.153.175/victorribeiro/trabalho/adm/novo/index4.php">  Gráfico 3 </a>
	  <a  target=_blank href="http://200.145.153.175/victorribeiro/trabalho/adm/novo/index6.php">  Gráfico 4 </a>
	</div>
	</center>
</body>
</html>