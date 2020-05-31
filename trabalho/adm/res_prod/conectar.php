<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Conecta com BD PostgreSQL</title>
</head>
<body>
	<?php
		//Conecta com o PostgreSQL
		$conecta = pg_connect("host=localhost port=5432 dbname=2016_72c_17_21_22_23 user=alunocti password=alunocti");
		if($conecta)
		{
			echo "";
		}
		else
		{
			echo "Não foi possível estabelecer conexão com o PostgreSQL!<br>";
			exit;
		}
	?>
</body>
</html>