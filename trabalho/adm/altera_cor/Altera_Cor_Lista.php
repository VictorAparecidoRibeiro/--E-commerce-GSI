<!DOCTYPE php>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
	  <title>Altera Cor Lista</title>
	  <link rel= "stylesheet" type= "text/css" href= "estilo_adm.css"/>
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
 <div id= "mae_usuarios">
  <h1>ALTERA COR LISTA</h1>
  <hr>
  <br>
  <p align="left">
    <?php
	 include "conectar.php";
	$id_cor=$_GET['id_cor'];
	$sql="select *from cor where id_cor=$id_cor";
	$resultado=pg_query($conecta,$sql);
	$qtde=pg_num_rows($resultado);
	if($qtde==0)
	{
		echo"Cor não encontrada!!!<br><br>";
		exit;
	}	
	$linha = pg_fetch_array($resultado);
	
	
	?>
	<p align="left">
	<form action="GravaCor.php" method="get">
	Id Cor:<input type="text" name="id_cor" 
	     value="<?php echo $linha[0];?>"readonly><br>
	Cor:<input type="text" name="cor" 
	     value="<?php echo $linha[1];?>"><br>
		 <input type="submit" value="Gravar">
		 <input type="reset" value="Voltar">
	</form>
	</p>
		 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
	</div>
 </center>
</body>
</html>