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
	 
	 $tamanho=$_GET['tamanho'];
	 
	 $sql="insert into tamanho values(nextval('tamanho_id_tamanho_seq'::regclass),'$tamanho')";
	 
	 $resultado=pg_query($conecta,$sql);
	 $linhas=pg_affected_rows($resultado);
	 if($linhas > 0)
     {
		  echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
          echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=http://200.145.153.175/victorribeiro/trabalho/adm/insere_tamanho/FormInserirTamanho.php'>";
	 }		 
	 else
		 echo"Erro na gravação<br><br>";
	 
	 pg_close($conecta);
	 
?>
</body>
</html>