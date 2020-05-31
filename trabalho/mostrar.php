<?php
include "recebeloguin.php";
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Resultado da Pesquisa</title>
<link rel= "stylesheet" type= "text/css" href= "estilo.css"/>
<link rel= "stylesheet" type= "text/css" href= "form.css"/>
<link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel= "stylesheet" type= "text/css" href= "estilo_produtos.css" />
</head>
<body>
	<center>
    <div id="mae">
	       
		   <div id="logo"><!-- div que vai ter a imagem do logo o carrinho e o login-->
				<div id="img_logo"><a href="index.php"> <img src="imagens/logo.jpg"> </a> <!-- onde vai ficar a imagem do logo -->
				</div>
				
				<div id="icones_logo">
				
					<div id="icone_loguin">

					
			
						  <div id='texto_loguin'><?php echo "Bem Vindo.".$user; ?></div><br>
						
						<div id="img_loguin"> 
						
						
						<?php if(!isset($_SESSION['logou']))
						{?>
						
					     
						  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>

						  <!-- Modal -->
						  <div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Formulário de login:</h4>
								</div>
								<div class="modal-body">
						        <form class="form-container" action="checarlogin.php" method="post">
									<div class="form-title"><h2>Login</h2></div>
									<div class="form-title">Usuário</div>
									<input class="form-field" type="text"  name="login2" id="login2"/><br />
									<div class="form-title">Senha</div>
									<input class="form-field" type="password" name="password" id="password" /><br />
									<div class="submit-container">
									<input class="submit-button" type="submit" value="Enviar" />
									</div>
									</form>
                         
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							  
							</div>
						  </div>
						   <a href="logar.php">
                          <div id="btn_cadas">
						      <div id="txt_lg">Cadastrar</div>
                          </div>
						  </a>
						
		
		
		
						
						<?php } 

							else 
							{
								echo "<center><a href=deslogar.php>  <img src=imagens/home_loguin.jpg> </a> </center>";
								echo "<center> <a href=deslogar.php>Logout</a> </center> ";
							}
							?>
							
							
						
						</div>
						
						
						
					
						
						
					</div>
									
					<div id="icone_carrinho">


						
						<div id="texto_carrinho"> CARRINHO DE COMPRAS	</div><br>
					

					
						<div id="img_carrinho"> 
						
							<a href="carrinho2.php"">
							
							<img src="imagens/home_carrinho.jpg" /> 
							
							</a>
						
						
						</div>
						
					
					
					</div>
				
				
				
				
				
				
				</div>
				
				
				
				
				
				
				
				
				<?php   
					
						
						if($_SESSION['tipo'] == '1')
						{
							?>
							
							<div id="botao_adm">
								
								<a href="adm/adm.php"/> <div id="btn"> ADMINISTRADOR </div> </a>
							
							</div>			
							
				<?php   }	
				 	
					
						if(isset($_SESSION['logou']) and $_SESSION['tipo'] != '1')
						{			
				?>	
				
					<div id="botao_minhaconta">
								
						<a href="minhaconta.php"/> <div class="btn_minhaconta" id="btn"> Minha Conta  </div> </a>
		
					</div>
				
				
				
				
				<?php } ?>	
				
						
		  </div>
		  
		<div id="menu">          
				<a href="index.php"> <div id="btn">Início</div></a> 
				<a href="contato.php"> <div id="btn">Contato</div></a><!-- o link dos botões -->
				<a href="curiosidades.php"> <div id="btn">Curiosidades</div></a> 
				<a href="desenvolvedores.php"> <div id="btn">Desenvolvedores</div></a>
		<div class="dropdown">	
				<a href="mostrar.php"> <div id="btn2">  
			 		<button class="dropbtn">Produtos</button>
			  		<div class="dropdown-content">
    						<a href="mostrar.php?nome=&mandala=on">Mandalas</a>
    						<a href="mostrar.php?nome=&filtro=on">Filtros</a>
    						<a href="mostrar.php?nome=&chaveiro=on">Chaveiros</a>
  					</div>
              			</div></a> 
			</div>
		<br>

		</div>
	<?php
	include "conectar.php";
	?>
	<div id="mae_m">
		<div id="pesquisa_m">
			<form method="GET" action="mostrar.php">
				<br>&nbspNome do Produto:<p><center><input type="textbox" id="textbox_nome_m" name="nome"></center></p>
				&nbspOrdenar por:
				<select name="opcao" id="fonte_m">
					<option value="1"><font color="black">Nome</font></option>
					<option value="2"><font color="black">Cor</font></option>
					<option value="3"><font color="black">Tamanho</font></option>
					<option value="4"><font color="black">Enfeite</font></option>
					<option value="5"><font color="black">Preço</font></option>
				</select>
				<hr>&nbspTipo:
				<p><input type="checkbox" name="mandala">Mandala</p>
				<p><input type="checkbox" name="filtro">Filtro de Sonho</p>
				<p><input type="checkbox" name="chaveiro">Chaveiro</p>
				<hr>&nbspCor Predominante:
				<?php
				$sql="select * from cor";
				$resultado= pg_query($conecta, $sql);
				$qtde=pg_num_rows($resultado);
				for ($cont=0; $cont < $qtde; $cont++)
				{
					$linha=pg_fetch_array($resultado);
					?>
					<p><input type="checkbox" name="<?php echo $linha['cor'] ?>"><?php echo $linha['cor'] ?></p>
				<?php } ?>
				<hr>&nbspTamanho:<p>
				<?php
				$sql="select * from tamanho";
				$resultado= pg_query($conecta, $sql);
				$qtde=pg_num_rows($resultado);
				for ($cont=0; $cont < $qtde; $cont++)
				{
					$linha=pg_fetch_array($resultado);
					?>
					<input type="checkbox" name="<?php echo $linha['tamanho'] ?>"><?php echo $linha['tamanho'] ?>&nbsp&nbsp
				<?php } ?></p>
				<hr>&nbspEnfeite:
				<?php
				$sql="select * from enfeite";
				$resultado= pg_query($conecta, $sql);
				$qtde=pg_num_rows($resultado);
				for ($cont=0; $cont < $qtde; $cont++)
				{
					$linha=pg_fetch_array($resultado);
					?>
					<p><input type="checkbox" name="<?php echo $linha['enfeite'] ?>"><?php echo $linha['enfeite'] ?></p>
				<?php } ?>
				<hr>&nbspPreço:
				<p><input type="checkbox" name="<2">Até R$2,00</p>
				<p><input type="checkbox" name="2-5">Entre R$2,00 e R$5,00</p>
				<p><input type="checkbox" name=">5">Maior que R$5,00</p>
				<hr><center>
				<input type="submit" class="btn_submit_m" value="Pesquisar">&nbsp
				<input type="reset" class="btn_reset_m" value="Limpar"></center>
			</form>
		</div>	
		<center>
		<?php
		$opcao=$_GET["opcao"];
		switch ($opcao)
		{
		case 1: $ordem="nome"; break;
		case 2: $ordem="cor"; break;
		case 3: $ordem="p.tamanho"; break;
		case 4: $ordem="enfeite"; break;
		case 5: $ordem="valor"; break;
		default: $ordem="nome"; break;
		}
		$pesquisa = strtolower($_GET["nome"]);
		$nome="lower(nome) like '%$pesquisa%'";
		$sql="select * from tamanho";
		$resultado= pg_query($conecta, $sql);
		$qtde=pg_num_rows($resultado);
		$tamanho="";
		$aux=0;
		for ($cont=0; $cont < $qtde; $cont++)
		{
			$linha=pg_fetch_array($resultado);
			if($_GET[$linha['tamanho']]=="on")
			{
				if($aux==0)
				{
					$tamanho=$tamanho."AND (t.tamanho='".$linha['tamanho']."'";
					$aux++;
				}
				else
					$tamanho=$tamanho." OR t.tamanho='".$linha['tamanho']."'";
			}
		}
		if($aux!=0)
			$tamanho=$tamanho.")";
		$sql="select * from cor";
		$resultado= pg_query($conecta, $sql);
		$qtde=pg_num_rows($resultado);
		$cor="";
		$aux=0;
		for ($cont=0; $cont < $qtde; $cont++)
		{
			$linha=pg_fetch_array($resultado);
			if($_GET[$linha['cor']]=="on")
			{
				if($aux==0)
				{
					$cor=$cor."AND (c.cor='".$linha['cor']."'";
					$aux++;
				}
				else
					$cor=$cor." OR c.cor='".$linha['cor']."'";
			}
		}
		if($aux!=0)
			$cor=$cor.")";
		$sql="select * from enfeite";
		$resultado= pg_query($conecta, $sql);
		$qtde=pg_num_rows($resultado);
		$enfeite="";
		$aux=0;
		for ($cont=0; $cont < $qtde; $cont++)
		{
			$linha=pg_fetch_array($resultado);
			if($_GET[$linha['enfeite']]=="on")
			{
				if($aux==0)
				{
					$enfeite=$enfeite."AND (e.enfeite='".$linha['enfeite']."'";
					$aux++;
				}
				else
					$enfeite=$enfeite." OR e.enfeite='".$linha['enfeite']."'";
			}
		}
		if($aux!=0)
			$enfeite=$enfeite.")";
		$preco="";
		$aux=0;
		if($_GET["<2"]=="on")
		{
			$preco=$preco."AND (p.valor<=2.00";
			$aux++;
		}
		if($_GET["2-5"]=="on")
		{
			if($aux==0)
			{
				$preco=$preco."AND (p.valor<=5.00 AND p.valor>=2.00";
				$aux++;
			}
			else
				$preco=$preco." OR p.valor<=5.00 AND p.valor>=2.00";
		}
		if($_GET[">5"]=="on")
		{
			if($aux==0)
			{
				$preco=$preco."AND (p.valor>=5.00";
				$aux++;
			}
			else
				$preco=$preco." OR p.valor>=5.00";
		}
		if($aux!=0)
			$preco=$preco.")";
		$tipo="";
		$aux=0;
		if($_GET["mandala"]=="on")
		{
			$tipo=$tipo."AND (lower(descricao) like '%mandala%'";
			$aux++;
		}
		if($_GET["filtro"]=="on")
		{
			if($aux==0)
			{
				$tipo=$tipo."AND (lower(descricao) like '%filtro de sonho%'";
				$aux++;
			}
			else
				$tipo=$tipo." OR lower(descricao) like '%filtro de sonho%'";
		}
		if($_GET["chaveiro"]=="on")
		{
			if($aux==0)
			{
				$tipo=$tipo."AND (lower(descricao) like '%chaveiro%'";
				$aux++;
			}
			else
				$tipo=$tipo." OR lower(descricao) like '%chaveiro%'";
		}
		if($aux!=0)
			$tipo=$tipo.")";
		$sql_contagem="SELECT p.id_produto, p.nome, p.qtde, p.excluido, p.imagem, p.descricao, p.valor, c.cor, t.tamanho, e.enfeite
		FROM produtos p
		JOIN cor c ON p.cor=c.id_cor
		JOIN  tamanho t ON p.tamanho=t.id_tamanho
		JOIN enfeite e ON p.enfeite=e.id_enfeite
		WHERE $nome $tamanho $cor $enfeite $preco $tipo
		AND excluido != 's' AND p.qtde>0
		ORDER by $ordem";
		$resultado= pg_query($conecta, $sql_contagem);
		$total=pg_num_rows($resultado);
		$pagina = (isset($_GET["pagina"]))?($_GET["pagina"]):1;
		$limite=9;
		$tot_paginas=ceil($total/$limite);
		$inicio=($pagina*$limite)-$limite;
		$sql="SELECT p.id_produto, p.nome, p.qtde, p.excluido, p.imagem, p.descricao, p.valor, c.cor, t.tamanho, e.enfeite
		FROM produtos p
		JOIN cor c ON p.cor=c.id_cor
		JOIN  tamanho t ON p.tamanho=t.id_tamanho
		JOIN enfeite e ON p.enfeite=e.id_enfeite
		WHERE $nome $tamanho $cor $enfeite $preco $tipo
		AND excluido != 's' AND p.qtde>0
		ORDER by $ordem
		LIMIT $limite OFFSET $inicio";
		$resultado= pg_query($conecta, $sql);
		$qtde=pg_num_rows($resultado);
		?>
		<div id="resultado_m">
		<?php
		for ($cont=0; $cont < $qtde; $cont++)
		{
			$linha=pg_fetch_array($resultado);
			?>
			<div id="produto_m"><?php $id_produto=$linha['id_produto']; echo "<a href='mostrar_produto.php?id=$id_produto'>";?>
				<font color="white"><h3><?php echo $linha['nome'] ?></h3></font>
				<img src="<?php echo $linha['imagem']?>" width="150" height="150">
				<font color="white"><h4>Preço: R$<?php echo number_format($linha['valor'], 2, ',', '.')?></h4></font>
				<button class="btn_comprar_m">Comprar</button>
			</div>
		<?php } ?>
		</div>
		<div id="pagina_m">
			<a href="mostrar.php?pagina=1"><font color="white"><<</font></a>&nbsp&nbsp
			<font color="white">
			<?php
			if($pagina>1)
			{
				$i=$pagina-1;
				echo "<a href='mostrar.php?pagina=$i'><</a>&nbsp&nbsp";
			}
			for($i=1;$i<$tot_paginas+1;$i++)
			{
				echo "<a href='mostrar.php?pagina=$i'>".$i."</a>&nbsp&nbsp";
			}
			if($pagina<$tot_pagina-1)
			{
				$i=$pagina+1;
				echo "<a href='mostrar.php?pagina=$i'><</a>&nbsp&nbsp";
			}
			echo "<a href='mostrar.php?pagina=$tot_paginas'>>></a>";
			?>
			</font>
		</div>
	</div>
    <div id="links">
		
				<a href="index.php"> <div id="btn">Início</div></a> 
				<a href="contato.php"> <div id="btn">Contato</div></a> 
				<a href="curiosidades.php"> <div id="btn">Curiosidades</div></a> 
				<a href="desenvolvedores.php"> <div id="btn">Desenvolvedores</div></a>
				<a href="mostrar.php"> <div id="btn">Produtos</div></a>
				
		</div>
		
		
		
		<div id="mapa">
			<h3> Mapa do site </h3><br>
			
			<div id="colun1">
				<br>
				<b class="link_mapa" ><font size="3" color="black">Sites Úteis</font> </b><br>
				<a class="link_mapa" href="http://www.cti.feb.unesp.br/">CTI</a><br>
				<a class="link_mapa" href="http://www.unesp.br/">Unesp</a><br>
				
			</div>
			
			<div id="colun1">
				<br>
				<b class="link_mapa"><font size="3" color="black">Saiba mais</font> </b><br>
				<a class="link_mapa" href="curiosidades.php">Mandalas </a><br>
				<a class="link_mapa" href="curiosidades.php">Filtros </a><br>
				
			</div>
			
			<div id="colun1">
				<br>
				<b class="link_mapa"><font size="3" color="black">Produtos</font> </b><br>
				<a class="link_mapa" href="mostrar.php?nome=&mandala=on">Mandalas </a><br>
				<a class="link_mapa" href="mostrar.php?nome=&filtro=on">Filtros </a><br>
				
			</div>
			
			<div id="colun1">
				<br>
				<b class="link_mapa"><font size="3" color="black">Cadastro</font> </b><br>
				<a class="link_mapa" href="logar.php">Cadastro </a><br>
				
				
			</div>
			
			<div id="colun1">
				<br>
				<b class="link_mapa"><font size="3" color="black">Desenvolvedores</font> </b><br>
				<a class="link_mapa" href="contato.php">Contato </a><br>
				<a class="link_mapa" href="desenvolvedores.php">Designers </a>	<br>
				
			</div>	        
		</div>
		<div id="desenvolvedores">

			<a href="desenvolvedores.php"><div id="de_1">nº17 Matheus </div></a> 
			<a href="desenvolvedores.php"><div id="de_2">nº21 Thiago </div></a> 
			<a href="desenvolvedores.php"><div id="de_3">nº22 Victor </div></a> 
			<a href="desenvolvedores.php"><div id="de_4">nº23 Victor </div></a>
			
		</div>
		
		
		
		
		
		
		
		<a href="#top"><div id="back">Voltar ao topo</div></a>
		 
		
		
		
		
	</div>
    </center>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</body>
</html>
