<?php
	session_start();
	// script foi chamado de index.php
	include "conectar.php";
	
	$login = strtolower($_POST['login2']);
	$senha = md5($_POST['password']);
	//$senha = md5($senha); //ou se a senha estiver criptografada
	$sql = "select * from usuarios where login = '$login' and senha = '$senha' and excluido = 'n'; ";
	$res = pg_query($conecta, $sql);
	
	if($_SESSION['logou']=="s")
	{
		    echo "<script> alert('Você já está logado !!'); </script>";
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
			exit;
	}		
	if (pg_num_rows($res) > 0)
	{
	$linha = pg_fetch_array($res);
	$_SESSION['logou'] = "s";
	$_SESSION['login'] = $linha['login'];
	
	
	    
		if($linha['tipo'] == 1)
		{
			$_SESSION['tipo'] = 1;
			echo "<script> alert('Bem vindo Administrador: ".$linha['login']."!!'); </script>";
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/victorribeiro/trabalho/adm/adm.php'>";
		}
		else
		{
			$_SESSION['tipo'] = 0;
			echo $_SESSION['login'];
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
		}
		
	
	
	}
	
	else
	{
		echo "<script> alert('Senha ou Usuário incorreto!'); </script>";
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
	}


?>