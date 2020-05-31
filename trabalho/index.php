<?php
include "recebeloguin.php";
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Index</title>
<link rel= "stylesheet" type= "text/css" href= "estilo.css"/>
<link rel= "stylesheet" type= "text/css" href= "form.css"/>
<link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
								
								<a href="http://200.145.153.175/victorribeiro/trabalho/adm/adm.php"/> <div id="btn"> ADMINISTRADOR </div> </a>
							
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
		
	
        <div id="banner">
			
			
              <div class="w3-content" >

             <img class="mySlides" src="imagens/home_mandala1.jpg" style="width:100%">
             
             <img class="mySlides" src="imagens/mandala_slide2.jpg" style="width:100%">
		

		     <a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
			 <a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

</div>
		
		
		</div>		
		
		<div id="texto1" class="textos">
			
		 </div>		 
		 <div id="img_tex" align="center"><!--div que onde ficar o a div kit e tudo que tem dentro dela-->
		 
				<div id="kit"> <!-- Kit significa a div que vai ter dentro dela a imagem do produto e logo em baixo seu texto-->
				    
					
					<div class="pic"><!--onde vamos colocar uma imagem menor do produto e algum texto -->
					
					  <div class="text">
					
						A GSI também proporciona uma gama ampla de chaveiros com mandalas.
						<br><a href="mostrar.php?nome=&chaveiro=on" class="saiba_mais">Saiba mais ...</a>
					
					</div>
					 
					   	 
						
					</div>
					
					
					
				</div>
				
				<div id="kit">
				      
					<div class="pic2"> 
					    
						
                          <div class="text">
					
						Nossas mandalas são confecionadas 
						artesanalmente e feitas com a melhor qualidade de materiais.
						<br><a href="mostrar.php?nome=&mandala=on" class="saiba_mais">Saiba mais ...</a>
					
					    </div>						 
 						
					
						</div>
					
				
					
					
					
					
						
				</div>
				
				<div id="kit">
				        
						<div class="pic3">  
					
					    <div class="text">
					
						Assim como os chaveiros e as mandalas nossa empresa também fornece filtro dos sonhos feitos dos mais diversos tipos de materiais.
						<br><a href="mostrar.php?nome=&filtro=on" class="saiba_mais">Saiba mais ...</a>
					
					</div>
						 
						 
						
						
						</div>
					    
					
					
					
						
				</div>
				
		 </div>
		 
		 
		 <div id="tex_fil"><!--div onde vai colocar o texto e um video do produto-->
			<div id="text" align="justify"><!--onde vamos colocar o texto que acompanha o video-->
			
			
			
			</div>
			
			<div id="filme" align="right">
			<!--onde vamos colocar o video-->
			
			<iframe width="500px" height="280" src="https://www.youtube.com/embed/YOe9AtEu0y8" frameborder="0" allowfullscreen></iframe>
			
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


