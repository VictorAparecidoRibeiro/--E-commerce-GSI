<?php
	session_start();
	if (!isset($_SESSION["logou"]))
	{
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
		exit;
	}
	//dados enviados do script mostrar.php
	include "conectar.php";
	$cod_produto = $_GET["cod_produto"];
	$sql="select * from produtos
	 where cod_produto = $cod_produto
	 and excluido != 's'";
	$resultado=pg_query($conecta,$sql);
	$qtde=pg_num_rows($resultado);
	if ( $qtde == 0 )
	{
		echo "Produto n&atilde;o encontrado !!!<br><br>";
		exit;
	}
	//$linha = pg_fetch_row($resultado); //só retorna índices numéricos
	$linha = pg_fetch_array($resultado); /*permite usar matriz associativa, ou seja,
	com os nomes dos campos da tabela */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Confirma Exclusão</title>
</head>
<body>
	<form action="exclusao_logica.php" method="get">
	Código do produto <input type="text" name="cod_produto"
	value="<?php echo $linha['cod_produto']; ?>" readonly><br><br>
	<?php /*se usar pg_fetch_row() tem que inserir índice numérico,
	por exemplo: $linha[0] no lugar de $linha['cod_produto']*/ ?>
	Descrição <input type="text" name="descricao"
	value="<?php echo $linha['descricao']; ?>" readonly><br><br>
	Quantidade <input type="text" name="qtde_"
	value="<?php echo $linha['qtde']; ?>" readonly><br><br>
	Preço <input type="text" name="preco"
	value="<?php echo $linha['preco']; ?>" readonly><br><br>
	Código do fornecedor <input type="text" name="cod_fornecedor"
	value="<?php echo $linha['cod_fornecedor']; ?>" readonly><br><br>
	<input type="submit" value="Confirma exclusão">
	</form>
</body>
</html>