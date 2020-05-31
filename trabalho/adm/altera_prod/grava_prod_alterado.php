
<?php
	
			session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	
	
	



 include "conectar.php";
 //dados enviados do script altera_prod_lista.php
 $id_produto=$_POST["id_produto"];
 $nome=$_POST["nome"];
 $cor=$_POST["cor"];
 $qtde=$_POST["qtde"];
 $tamanho=$_POST["tamanho"];
 $enfeite=$_POST["enfeite"];
 $imagem=$_POST["imagem"];
 $descricao=$_POST["descricao"];
 $excluido='n';
 
 $sql="update produtos
 set
	 nome = '$nome',
	 cor =$cor,
	 qtde = $qtde,
	 tamanho = $tamanho,
	 enfeite = $enfeite,
	 excluido ='$excluido',
	 imagem = '$imagem',
	 descricao = '$descricao'
	 
	 where id_produto = $id_produto";
	 
	 echo"$sql";
 $resultado=pg_query($conecta,$sql);
 $qtde=pg_affected_rows($resultado);
 if ($qtde > 0)
 {
 echo "<script type='text/javascript'>alert('Alteração OK !!!')</script>";
 echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../adm.php'>";
 }
 else
  echo "<script type='text/javascript'>alert('ERRO NA ALTERAÇÃO!!!')</script>";
  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../altera_prod/altera_prod.php'>";
?>