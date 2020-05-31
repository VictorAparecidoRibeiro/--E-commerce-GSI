<?php

	session_start();
	
	$login = $_SESSION['login'];
	$nome = $_POST['nome_mc'];
	$sobrenome = $_POST['sobrenome_mc'];
	$email = $_POST['email_mc'];
	$data_nasc = $_POST['datanasc'];
	$tipo = $_POST['tipo'];
	$excluido = $_POST['excluido'];
	$no_compras = $_POST['no_compras'];
	$genero = $_POST['sexo'];
	$senha = $_POST['password'];

	$sql = "update usuarios set 
								nome = '$nome',
								sobrenome = '$sobrenome',
								tipo = $tipo,
								excluido = '$excluido',
								data_nasc = '$data_nasc',
								no_compras = $no_compras,
								genero = '$genero',
								email = '$email'
								where login = '$login'";
			

	
	include "../conectar.php";
	
	$res = pg_query($conecta, $sql);
	
	$qntde = pg_affected_rows($res);
	
	if($qntde > 0)
		echo "<script> alert('Dados alterados com sucesso !'); </script>";
	else
		echo "<script> alert('Falha ao alterar dados !'); </script>";
	
	pg_close($conecta);
	echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../minhaconta.php'>";
	

?>