<!DOCTYPE php>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
	  <title>Altera Cor Lista</title>
	  
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
 include "conectar.php";

 $id_cor=$_GET['id_cor'];
 $cor=$_GET['cor'];
 
 $sql="update cor set 
 
 cor = '$cor' 
 where id_cor = $id_cor";
 
 echo $id_cor;
 echo $cor;
 
 $resultado=pg_query($conecta,$sql);
 $qtde=pg_affected_rows($resultado);
 if ($qtde > 0)
 {
 echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
 echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/victorribeiro/trabalho/adm/altera_cor/AlteraCor.php'>";
 }
 else
  echo "Erro na gravacao !!!<br><br>";
?>
</body>
</html>