<!DOCTYPE php>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
	  <title>Altera Cor</title>
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
</body>
 <center>
 <div id= "mae_usuarios">
 <h1>ALTERA COR</h1>
 <hr>
   <?php
      include"conectar.php";
	  
	  $sql="select *from cor order by id_cor";
	  $resultado=pg_query($conecta,$sql);
	  $qtde=pg_num_rows($resultado);
	  
	  if($qtde > 0)
	  {
		  echo"Cores encontradas<br><br>";
		  for($cont=0;$cont<$qtde;$cont++)
		  {
			  $linha=pg_fetch_array($resultado);
			  echo"Código da cor:".$linha['id_cor']."<br>";
			  echo"Cor..........:".$linha['cor']."<br>";
			  
			  echo"<a href='Altera_Cor_Lista.php?id_cor=".$linha[id_cor]."'>
			  Alterar</a><br><br>";
		  }	  
		  
	  }	  
	  else
		  echo"Nenhuma cor foi encontrada!!!<br><br>";
   ?>
   </p>
		 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
	</div>
 </center>
</body>
<body>