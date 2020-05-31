<?php
	include "recebeloguin.php";
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Contato</title>
<link rel= "stylesheet" type= "text/css" href= "estilo.css" />

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
    <div id="mae2">
	       
		   <div id="logo"><!-- div que vai ter a imagem do logo o carrinho e o login-->
				<div id="img_logo"><a href="index.php"> <img src="imagens/logo.jpg"> </a> <!-- onde vai ficar a imagem do logo -->
				</div>
				
				
				<div id="icones_logo">
				
					<div id="icone_loguin">

					
			
						  <div id='texto_loguin'><?php echo "Bem Vindo.".$user; ?></div>
						
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


						
						<div id="texto_carrinho"> CARRINHO DE COMPRAS	</div>
					

					
						<div id="img_carrinho"> 
						
							<a href="carrinho2.php">
							
							<img src="imagens/home_carrinho.jpg" /> 
							
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

		<center> <H1> CONTATO </H1> </center>

		<HR>
		
		<div id="contato2">
		   
		    <div id="dados2">
			
			
				<p class="abc">  - Avenida Nações Unidas, 58-50 - Núcleo Residencial Presidente Geisel, Bauru - SP </p>
				<p class="abc">  - Telefone:(14) 3103-6150</p>
				<p class="abc">  - E-mail: atendimento@gsi@hotmail.com </p>
			    <p class="abc">  - Horário de atendimento: 19:00 às 23:00 horas de Quarta-feira e Quinta-feira</p>
				
			</div>
			
			<div id="mapa2">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.344376524716!2d-49.02730268536768!3d-22.340622023528955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf67ba4accea4f%3A0xc015eb23d210db44!2sCTI+-+Col%C3%A9gio+T%C3%A9cnico+Industrial+%22Prof.+Isaac+Portal+Rold%C3%A1n%22!5e0!3m2!1spt-BR!2sbr!4v1471310521818" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
		 </div>
		
		
		<div id="links">
		
				<a href="index.php"> <div id="btn">Início</div></a> 
				<a href="contato.php"> <div id="btn">Contato</div></a> <!-- o link dos botões -->
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

			<a href="desenvolvedores.php"><div id="de_1">nº17 Matheus</div></a> 
			<a href="desenvolvedores.php"><div id="de_2">nº21 Thiago</div></a> 
			<a href="desenvolvedores.php"><div id="de_3">nº22 Victor</div></a> 
			<a href="desenvolvedores.php"><div id="de_4">nº23 Victor</div></a>
			
		</div>
		<a href="#top"><div id="back">Voltar ao topo</div></a>
		 
		
		
		
		</div>
    </center>
	
</body>
</html>


