<!DOCTYPE php>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
	  <title>Confirmação de inclusão</title>
	  
	  
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
	 
	 $cor=$_GET['cor'];
	 
	 $sql="insert into cor values(nextval('cor_id_cor_seq'::regclass),'$cor')";
	 
	 $resultado=pg_query($conecta,$sql);
	 $linhas=pg_affected_rows($resultado);
	 if($linhas > 0)
     {
		 echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
 echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/victorribeiro/trabalho/adm/insere_cor/FormInserirCor.php'>";
	 }		 
	 else
		 echo"Erro na gravação<br><br>";
	 
	 pg_close($conecta);
	 
?>
</body>
</html>