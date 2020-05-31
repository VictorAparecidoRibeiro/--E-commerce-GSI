<?php
	
			session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	
	
	



include "conectar.php";

$nome= $_POST['nome'];
$qtde1=   $_POST['qtde'];

$sql="update produtos
    set 
	excluido = 's'
	
	where nome = '$nome' ";
	

	
$resultado=pg_query($conecta,$sql);
$qtde=pg_affected_rows($resultado);

	if ($qtde > 0 && $qtde1 != 0 )
	{
		echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../excl_prod/produtos.php'>";
	}
	else
	{
		echo "Erro na exclusão ou quantidade igual a 0 !!!<br>";
		
		
	}
?>
 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' ">