<?php
session_start();
if (!isset($_SESSION["logou"]))
	{
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
		exit;
	}
// script foi chamado de confirma_exclusao_logica.php
include "conectar.php";
$cod_produto = $_GET['cod_produto'];
$data=date('d/m/Y'); //'Y' (maiúsculo) para ano com 4 dígitos
$sql="update produtos
 set excluido = 's', data_exclusao='$data'
 where cod_produto = $cod_produto";
$resultado=pg_query($conecta,$sql);
$qtde=pg_affected_rows($resultado);
if ($qtde > 0 )
{
	echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=pesquisar.php'>";
}
else
{
	echo "Erro na exclus&atilde;o !!!<br>";
	echo "<a href='pesquisar.php'>Voltar</a>";
}
?>