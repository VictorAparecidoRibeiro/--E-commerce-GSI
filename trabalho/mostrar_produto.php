<?php
include "recebeloguin.php";
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Produto Selecionado</title>
<link rel= "stylesheet" type= "text/css" href= "estilo.css"/>
<link rel= "stylesheet" type= "text/css" href= "form.css"/>
<link rel="icon" href="logo.jpg" type="image/x-icon" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel= "stylesheet" type= "text/css" href= "estilo_selecionado.css" />
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
                          <div id="btn_cadas">
						      <div id="txt_lg">Cadastrar</div>
                          </div>
						
		
		
		
						
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
						
							<a href="#">
							
							<img src="imagens/home_carrinho.jpg" 
							onmouseover="this.src='imagens/home_carrinho2.jpg'" 
							onmouseout="this.src='imagens/home_carrinho.jpg'" /> 
							
							</a>
						
						
						</div>
						
					
					
					</div>
				
				
				
				
				
				
				</div>
				
				
				
				
				
				
				
				
				<?php   
					
						
						if($_SESSION['tipo'] == '1')
						{
							?>
							
							<div id="botao_adm">
								
								<a href="admin/adm.php"/> <div id="btn"> ADMINISTRADOR </div> </a>
							
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
<body>
	<div id="mae_s">
		<div id="produto_s">
			<div id="img_produto_s">
				<?php echo "<img src='imagens_produtos/produto_".$_GET["id"].".jpg' height='380' width='380'>";?>
			</div>
			<div id="texto_s">
				<?php  
					$id=$_GET["id"];
					$sql="SELECT p.id_produto, p.nome, p.qtde, p.excluido, p.imagem, p.descricao, p.valor, c.cor, t.tamanho, e.enfeite
					FROM produtos p
					JOIN cor c ON p.cor=c.id_cor
					JOIN  tamanho t ON p.tamanho=t.id_tamanho
					JOIN enfeite e ON p.enfeite=e.id_enfeite
					WHERE p.id_produto=$id
					AND excluido != 's'";
					$resultado= pg_query($conecta, $sql);
					$linha=pg_fetch_array($resultado);
				?>
				<h1>
				<?php
					echo "&nbsp".$linha['nome'] ?></h1><hr>
					&nbsp&nbspCor Predominante: <?php echo $linha['cor']?><br>
					&nbsp&nbspTamanho: <?php echo $linha['tamanho']?><br>
					&nbsp&nbspEnfeite: <?php echo $linha['enfeite']?><hr><br>
					<center><h1>R$<?php echo number_format($linha['valor'], 2, ',', '.')?><h6></h6>
					
					<button class="btn_adicionar_s"><span><a href="carrinho2.php?acao=add&id_produto=<?php echo $id?>"><font color="white"/>Adicionar ao Carrinho</font></a> </span></button></h1></center><br><br><hr>
					
					<?php
						if($linha['qtde']>0)
							echo "&nbsp&nbsp<img src='disponivel.png' height='15' width='15'>"."&nbspDisponível";
						else
							echo "<img src='indisponivel.png' height='15' width='15'>"."&nbspEsgotado";
					?>
			</div>
			<div id="descricao_s">
				<p>Descrição: <?php echo "&nbsp&nbsp".$linha['descricao']?></p>
			</div>
		</div>
	</div>
	<div id="links">
		
				<a href="index.php"> <div id="btn">Início</div></a> 
				<a href="contato.php"> <div id="btn">Contato</div></a> 
				<a href="curiosidades.php"> <div id="btn">Curiosidades</div></a> 
				<a href="desenvolvedores.php"> <div id="btn">Desenvolvedores</div></a>
				<a href="mostrar1.php"> <div id="btn">Produtos</div></a>
				
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

</body>
</html>