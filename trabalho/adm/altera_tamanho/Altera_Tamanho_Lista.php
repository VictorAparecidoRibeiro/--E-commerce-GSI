<!DOCTYPE php>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
	  <title>Altera Tamanho Lista</title>
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
 <h1>Altera tamanho lista</h1> 
 <HR>
    <?php
	 include "conectar.php";
	$id_tamanho=$_GET['id_tamanho'];
	$sql="select *from tamanho where id_tamanho=$id_tamanho";
	$resultado=pg_query($conecta,$sql);
	$qtde=pg_num_rows($resultado);
	if($qtde==0)
	{
		echo"tamanho não encontrado!!!<br><br>";
		exit;
	}	
	$linha = pg_fetch_array($resultado);
	
	
	?>
	
	<form action="GravaTamanho.php" method="get">
	<p aling="left">
	Id Tamanho:<input type="text" name="id_tamanho" 
	     value="<?php echo $linha[0];?>"readonly><br>
    </p>		 
	<p aling="left">
	Tamanho:<input type="text" name="tamanho" 
	     value="<?php echo $linha[1];?>"><br>
		 <input type="submit" value="Gravar">
		 <input type="reset" value="Voltar">
	</p>	 
	</form>
	
		 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
	</div>
	
 </center>
</body>
</html>