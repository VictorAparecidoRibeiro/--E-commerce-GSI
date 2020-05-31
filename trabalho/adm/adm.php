<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
	
			session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	
	
	?>



	<meta charset="UTF-8">
	<link rel= "stylesheet" type= "text/css" href= "estilo_adm.css"/>
	<title>ADM</title>
</head>
<body>
    <center>
	<div id="mae_adm">
	  <h1>BEM VINDO ADMINISTRADOR!!</h1>
	  
	<div id="barra_adm" >
	
	<a class="link_adm" href="../index.php"> <div class="link_adm" id="btn"> Inicio </div></a>
	

	<a class="link_adm" href="graficos.php"> <div class="link_adm" id="btn"> Gráficos</div></a>
	
	
	</div>
	  
	<p align="left">----------------------------------------------USUARIOS----------------------------------------------------<BR><BR>
	Para ver/excluir os usurios ativos: <a href="ver_exclusao/usuarios.php">USUARIOS</a><br><br>
	Para restaurar a conta do usurio: <a href="restauracao/res_usuario.php">RESTAURAR</a><BR><BR>
	----------------------------------------------PRODUTOS---------------------------------------------------<BR><BR>
	Para  ver/excluir os produtos ativos: <a href="excl_prod/produtos.php">PRODUTOS</a><BR><BR>
	Para adicionar produtos: <a href="insere_prod/ins_prod.php">INSERE PRODUTOS</a><BR><BR>
	Para alterar produtos: <a href="altera_prod/altera_prod.php">ALTERAR PRODUTOS</a><BR><BR>
	Para restaurar um produto: <a href="res_prod/res_prod.php">RESTAURAR PRODUTO</a><BR><BR>
	----------------------------------------------ENFEITE------------------------------------------------------<BR><BR>
	Para alterar um enfeite: <a href="enfeite/lista.php">ALTERAR ENFEITE </a> <BR> <BR>
	Para inserir um enfeite: <a href="enfeite/insere.php">INSERIR ENFEITE </a> <br> <br>
	
	--------------------------------------------TAMANHO------------------------------------------------------<BR><BR>
    Para inserir tamanho: <a href="insere_tamanho/FormInserirTamanho.php">INSERIR TAMANHO </a> </p>
	<p align="left">Para alterar tamanho: <a href="altera_tamanho/AlteraTamanho.php">ALTERAR TAMANHO </a> <br> <br></p>
	-------------------------------------------------COR------------------------------------------------------<BR>
	<p align="left">Para inserir cor: <a href="insere_cor/FormInserirCor.php">INSERIR COR </a> <br></p>
	<p align="left">Para alterar cor: <a href="altera_cor/AlteraCor.php">ALTERAR COR </a> </p>
	</div>
	</center>
</body>
</html>