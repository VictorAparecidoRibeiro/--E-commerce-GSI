<?php
	include "recebeloguin.php";
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Index</title>
<link rel= "stylesheet" type= "text/css" href= "estilo_curiosidades.css" />
<link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
<link rel= "stylesheet" type= "text/css" href= "form.css"/>
<link rel="icon" href="logo.jpg" type="image/x-icon" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
    <div id="mae3">
	       
		   <div id="logo"><!-- div que vai ter a imagem do logo o carrinho e o login-->
				<div id="img_logo"><a href="index.php"> <img src="imagens/logo.jpg"> </a> <!-- onde vai ficar a imagem do logo -->
				</div>
				
				
				<div id="icones_logo">
				
					<div id="icone_loguin">

					
			
						  <div id='texto_loguin'><?php echo "Bem Vindo.".$user; ?></div>
						
						<div id="img_loguin"> 
						
						
						<?php if(!isset($_SESSION['logou'])){?>
						
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


						
						<div id="texto_carrinho"> CARRINHO DE COMPRAS	</div>
					

					
						<div id="img_carrinho"> 
						
							<a href="carrinho2.php">
							
							<img src="imagens/home_carrinho.jpg"/> 
							
							</a>
						
						
						</div>
						
					
					
					</div>
				
				
				
				
				
				
				</div>
				
				<?php   	
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
				<a href="contato.php"> <div id="btn">Contato</div></a><!-- o link dos botões -->
				<a href="curiosidades.php"> <div id="btn">Curiosidades</div></a> 
				<a href="desenvolvedores.php"> <div id="btn">Desenvolvedores</div></a>
		<br>

		</div>
		<br>
		<br>
		<hr>
	
		<center> <H1>CURIOSIDADES</h1> </center>
		<hr>
		<br>
		<center> 
		<div id="curiosidades">
		    <div id="img3">
			
			
			 <img src="imagens/mdl_c1.JPG" width="250" height="250">
			 
			
			</div>
			
			<div id="texto3">
			  
			  <p align="left" > A Mandala é um objeto de decoração muito utilizado nos dias de hoje. Essa forma surgiu em tempos antigos da humanidade. O círculo da mandala significa eternidade e equilíbrio.

				A palavra "mandala" vem do sânscrito e significa "círculo". As primeiras mandalas da história surgiram no Tibete, no século VIII, e eram usadas como instrumentos de meditação.
			  </p>
			 
			
			</div>
			
			
			
			<div id="texto3a">
			<hr>
			 <p align="left" >
			 De acordo com a tradição, o filtro de sonhos deve ser pendurado sobre o berço dos bebês e sobre a cama das crianças, 
			 desta forma, os sonhos bons sabem exatamente por onde devem ir, passando pelo buraco central da teia, ao contrário 
			 dos sonhos e energias ruins que acabam se perdendo e ficando presos nos fios. Quando surgem os primeiros raios de sol
			 os sonhos ruins desaparecem.
			 </p>
			
			</div>
		
		     <div id="img3a">
			     
				 <img src="imagens/mdl_c12.jpg" width="250" height="250">
			
			</div>
			
			 <div id="img3b">
			   <img src="imagens/mdl_c13.jpg" width="250" height="250">
			
			</div>
		     
			 <div id="texto3b">
			 <hr>
			  <p align="left" >
			 Filtro dos sonhos é um amuleto típico da cultura indígena norte-americana que, supostamente, teria o poder de purificar 
			 as energias, separando os "sonhos negativos" dos "sonhos positivos", além de trazer sabedoria e sorte para quem o possui.
			 Também chamado de "Caçador de sonhos", "Espanta pesadelos" ou "Catasonhos", o dreamcatcher - nome original em inglês do
			 filtro dos sonhos - é considerado um símbolo dos costumes e da cultura indígena norte-americana.
			 
			 </p>
			  
			 </div>
	
		</div>

		</center>
		
		<div id="links"> <!-- o link dos botões -->
	
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

			<a href="desenvolvedores.php"><div id="de_1">n°17 Matheus Guermandi</div></a> 
			<a href="desenvolvedores.php"><div id="de_2">n°21 Thiago Piovan</div></a> 
			<a href="desenvolvedores.php"><div id="de_3">n°22 Victor Ribeiro</div></a> 
			<a href="desenvolvedores.php"><div id="de_4">n°23 Victor Scatena</div></a>
			
		</div>
		<a href="#top"><div id="back">Voltar ao topo</div></a>
		
</div>
</div>


</center>
</body>
</html>