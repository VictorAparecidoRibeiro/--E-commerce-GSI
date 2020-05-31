<html>

	<head>
	
		<title> Alterar Enfeites </title>
		<link rel= "stylesheet" type= "text/css" href= "estilo_enfeite.css" />
	
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



<?php

	session_start();
	if($_SESSION['tipo'] == 0)	echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../../index.php'>"; 

	include "../conectar.php";

	if(!isset($_POST['confirmado']))
	{

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM enfeite WHERE id_enfeite = $id;";
	
	$res = pg_query($conecta,$sql);
	
	$linha = pg_fetch_array($res);
	
	
	
	?>
	
	<form method="POST" action="altera.php">
		
	ID:<input type="text" id="id" name="id" value="<?php echo $linha['id_enfeite'];?>" readonly /> <br>
	NOME:<input type="text" id="nome" name="nome" value="<?php echo $linha['enfeite']; ?>" />
	
	<input type="hidden" name="confirmado" value="confirmado" id="confirmado"/>
	<Br>
	<input type="submit" value=" Finalizar !"/>
		
	</form>
	
	<?php
	}
	if(isset($_POST['confirmado']))
	{
		
		$nome = $_POST['nome'];
		$id = $_POST['id'];
		$sql2 = "update enfeite set enfeite = '$nome' where id_enfeite = $id;";
		
		$res2 = pg_query($conecta, $sql2);
		
		if(pg_affected_rows($res2) > 0)
		{
			echo "<script> alert('Alterado com Sucesso !!'); </script>";
			echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=lista.php'>";
		}
		
	}
?>
</body>

</html>