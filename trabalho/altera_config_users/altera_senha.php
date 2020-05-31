<?php
	
	session_start();

	include "../conectar.php";
	
	$senha_nova2 = md5($_POST['new_password2']);
	$senha_nova = md5($_POST['new_password']);
	$senha = md5($_POST['password']);
	$login = $_SESSION['login'];
	
	//$senha = md5($senha); //ou se a senha estiver criptografada
	
	$sql = "select * from usuarios where login = '$login' and senha = '$senha' and excluido = 'n'";
	$res = pg_query($conecta, $sql);
	
	
	if($_SESSION['tipo'] == '1')
	{
		echo"<script> Adiministradores não podem alterar dados !</script>";
		echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../minhaconta.php'>";
	}
	
	
	if (pg_num_rows($res) > 0)
	{
		$linha = pg_fetch_array($res);
		
		if($senha_nova == $senha_nova2)
		{
			
			$sql2 = "update usuarios set senha = '$senha_nova' where login = '$login' ";
			$res2 = pg_query($conecta, $sql2);
			
			
			echo "<script> alert('Senha alterada com Sucesso !!'); </script>";		
			echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../minhaconta.php'>";
			
		}
		else
		{
			echo "<script> alert('Senhas não correspondem !!'); </script>";
			echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../minhaconta.php'>";
		}
	}
	else
	{
			echo "<script> alert('Senha Atual Incorreta !!'); </script>";
			echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../minhaconta.php'>";
	}	
	

?>