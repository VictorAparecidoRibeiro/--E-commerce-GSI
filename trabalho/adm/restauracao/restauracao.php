<?php


			session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	
	







include "conectar.php";

$login= $_POST['login'];
$sql="update usuarios
    set 
	excluido = 'n'
	
	where login = '$login' ";
	

	
$resultado=pg_query($conecta,$sql);
$qtde=pg_affected_rows($resultado);

	if ($qtde > 0 )
	{
		echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../adm.php'>";
	}
	else
	{
		echo "Erro na exclusão !!!<br>";
		echo "<a href='adm.html'>Voltar</a>";
	}
?>