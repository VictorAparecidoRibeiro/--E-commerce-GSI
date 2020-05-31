<html>
<head>

	<link rel= "stylesheet" type= "text/css" href= "estilo_adm.css" />
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
<div id="mae">
<?php 
	
	session_start();

	
	if($_SESSION['tipo'] == 0)	echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=../../index.php'>"; 

	include "../conectar.php";

	echo "<h1> LISTA de ENFEITES </H1>";
	$sql = "SELECT * FROM enfeite ORDER BY id_enfeite;";
	
	$res = pg_query($conecta,$sql);
		
	
	
	if(pg_affected_rows($res) > 0)
	{
		for($cont = 1; pg_affected_rows($res) >= $cont; $cont++)
		{	
		?>
		
		<div id="mostra_enfeite">
			<?php
			$linha= pg_fetch_array($res);
			echo "<br>Nome do Enfeite:".$linha['enfeite'];
			echo "<br> ID:".$linha['id_enfeite'];
			echo "&nbsp&nbsp&nbsp   <a href=altera.php?id=".$linha['id_enfeite']."> Alterar </a><br><br>";
			?>
		</div>
			<?php
		}
	}
	else
		echo "Nenhum enfeite encontrado !";
	
	echo "<br><br><br><a href=../adm.php /> Voltar ao menu </a>";

?>
</div>
</center>
</body>

</html>