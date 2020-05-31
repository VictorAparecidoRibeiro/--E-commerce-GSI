<?php
	include "../conectar.php";
	session_start();
	
	
	if($_SESSION['tipo'] == 0)	echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../../index.php'>"; 

?>
<html>

	<head>
		<link rel= "stylesheet" type= "text/css" href= "estilo_enfeite.css" />
		<title> Inserir Enfeite </title>
		<meta charset="UTF-8">
	
	</head>

	<body> 
		<?php 
		
		if(!isset($_POST['confirmado']))
		{
		?>
		<form method="POST" action="insere.php">
		
		<center> <h1> Inserir Enfeite </h1> 
		<br><br><br>
		
		Nome:  <input type="text" name="nome" id="nome"/><br>
		
		<input type="hidden" name="confirmado" id="confirmado" value="confirmado"/>
		<input type="submit" value="Enviar">
		</center>
		
		</form>
		<?php
			echo "<br><br><br><a href=../adm.php /> Voltar ao menu </a>";
		}
		
		else
		{	
		
		$nome = $_POST['nome'];
		
		$sql = "insert into enfeite values(nextval('enfeite_id_enfeite_seq'::regclass),'$nome')";
		
		$res = pg_query($conecta,$sql);
		
		if(pg_affected_rows($res) > 0 )
		{
			echo "<script> alert('Produto Inserido !'); </script>";
			echo "<meta HTTP-EQUIV='refresh' content='0,URL=lista.php'>";
			
		}	
		
		}

		
		?>

	</body>
	
</html>
