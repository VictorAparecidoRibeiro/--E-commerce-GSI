<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Cadastra no BD PostgreSQL</title>
</head>
<body>
	<?php
		include "conectar.php";
		$user= strtolower($_POST['login']);
		$nome=$_POST['nome'];
		$sobrenome=$_POST['sobrenome'];
		$tipo=$_POST['tipo'];
		$excluido=$_POST['excluido'];
		$data_nasc=$_POST['datanasc'];
		$no_compras=$_POST['nocompras'];
		$password=md5($_POST['OK']);
		$genero=$_POST['sexo'];
		$email=$_POST['email'];
		
	
		
			$sql="insert into usuarios values ('$user','$nome','$sobrenome',$tipo,'$excluido','$data_nasc',$no_compras,'$password','$genero','$email' )";
		    $resultado=pg_query($conecta,$sql);
		    $linhas=pg_affected_rows($resultado);
		    if($linhas > 0)
		    {
			  
				echo "<script> alert('Usuário cadastrado com Sucesso !'); </script>";
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=logar.php'>";
			  
		    }
	        else{
				
		    	echo "Erro no cadastro !!!<br><br>";
				echo "<script> alert('Usuário já cadastrado!'); </script>";
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=logar.php'>";
				
				}
		        //Fecha a conexão com o PostgreSQL
		        pg_close($conecta);
		 	
		
	?>
</body>
</html>