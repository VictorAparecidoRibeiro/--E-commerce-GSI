<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8" />
 <title>Insere dados no banco testeDB1 do PostgreSQL</title>
 </head>
 <body>
 <?php
 
	 include "conectar.php"; 
	 
	 
	 	session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	 
	 
	 
	 $nome=$_POST['nome'];
	 $cor=$_POST['cor'];
	 $qtde=$_POST['qtde'];
	 $tamanho=$_POST['tamanho'];
	 $enfeite=$_POST['enfeite'];
	 $imagem=$_POST['imagem'];
	 $descricao=$_POST['descricao'];
	 $excluido='n';
	 $valor = $_POST['valor'];

	$sql="insert into produtos
	values(nextval('produtos_id_produto_seq'::regclass),
	
	'$nome',
	$cor,
	$qtde,
	$tamanho,
	$enfeite,
	'$excluido',
	'$imagem',
	'$descricao','$valor')";
	 
	 
	 
	$resultado=pg_query($conecta,$sql);
	$linhas=pg_affected_rows($resultado);
	

	if ($linhas > 0){
			echo "<script type='text/javascript'>alert('produto gravado !!!')</script>";
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../adm.php'>";
		}
	else
	{
		echo "<script type='text/javascript'>alert('ERRO NA GRAVAÇÃO !!!')</script>";
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../insere_prod/ins_prod.php'>";
	}
	
	pg_close($conecta);
	
 ?>
 </body>
</html>