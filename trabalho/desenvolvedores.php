<?php
	include "recebeloguin.php";
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Desenvolvedores </title>
<link rel= "stylesheet" type= "text/css" href= "estilo.css" />
<link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
<link rel= "stylesheet" type= "text/css" href= "form.css"/>
<link rel="icon" href="logo.jpg" type="image/x-icon" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
    <div id="mae4">
	       
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
						
							<a href="carrinho2.php"">
							
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
			<a href="mostrar.php"> 
			<div id="btn2">  

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

		<center> <H1> DESENVOLVEDORES </H1> </center>
		<hr>
		<br><br>
		<div id="des" align="left">
		
				   <div id="dentro">
				   
					   <div id="img_mandala">
					     Peso das imagens
						 <br>
						 <font color="red">Imagens contidas em todas as páginas:</font>
						 <br>
						 <a href="imagens.html">home_carrinho.jpg(3,54kb)</a>
						 <a href="imagens.html">home_loguin.jpg(2,76kb)</a>
						 <a href="imagens.html">logo.jpg(3,37kb)</a>
						 <br>
						 <font color="red">Index:</font>
						 <a href="imagens.html">FraseMandala.jpg(15,9kb)</a>
						 <a href="imagens.html">home_mandala1.jpg(34,2kb)</a>
						 <a href="imagens.html">home_mandala2.jpg(34,9kb)</a>
						 <a href="imagens.html">home_mandala3.jpg(19,1kb)</a>
						 <a href="imagens.html">mandala_slide2.jpg(38,4kb)</a>
						 <br>
						 <font color="red">Curiosidades:</font>
						 <a href="imagens.html">mdl_c1.jpg(19,3kb)</a>
						 <a href="imagens.html">mdl_c12.jpg(16,5kb)</a>
						 <a href="imagens.html">mdl_c13.jpg(18,9kb)</a>
						 <font color="red">Desenvolvedores:</font>
						 <a href="imagens.html">foto.jpg(22,6kb)</a>
						 <a href="imagens.html">foto1.jpg(28,7kb)</a>
						 <a href="imagens.html">foto2.jpg(7,72kb)</a>
						 <a href="imagens.html">foto3.jpg(12,9kb)</a>
						 <a href="imagens.html">filtro_desenho.jpeg(59.2kb)</a>
						 <br>
						 Professores Orientadores:
						 <br>
						 <br>
						  Kátia Livia Zambon - PHP
						  <br>
						  <br>
						  Vitor José Del Gaudio Simeão - SQL
						  <br>
						  <br>
						  Rodrigo Ferreira de Carvalho - Aplicativos
						  <br>
						  <br>
						  Jovita Mercedes Hojas Baenas - Gestão de negócios
						  
						 </div>
						  <div id="dados">
					   
					            <div id="ab1">
								
											   <div id="foto">
											   <img src="imagens/foto2.jpg" width="100px" height="100px">
											   </div>
											<div id="email">
											<b>17</b>, Matheus Guermandi Ribeiro<br><br>
											matheus_guermandi@hotmail.com
									</div>
									</div>
						 
								<div id="ab1">
									<div id="foto">
									  <img src="imagens/foto1.jpg" width="100px" height="100px">
									</div>
									<div id="email"><b>21</b>, Thiago Piovan<br><br>
											thiagopiovan@gmail.com</div>
								</div>
								
								<div id="ab1">
									<div id="foto"><img src="imagens/foto3.jpg" width="100px" height="100px"></div>
									<div id="email"><div id="email"><b>22</b>, Victor Ribeiro<br><br>
											victovoraz@hotmail.com</div> </div>
								</div>
								
								<div id="ab1">
									<div id="foto"><img src="imagens/foto.jpg" width="100px" height="100px"></div>
									<div id="email"><b>23</b>, Victor Scatena<br><br>
											victor__scatena@hotmail.com </div>
								</div>
								<img src="imagens/filtro_desenho.jpeg" width="550px" height="200px">
						</div>
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

			<a href="#"><div id="de_1">nº17 Matheus </div></a> 
			<a href="#"><div id="de_2">nº21 Thiago </div></a> 
			<a href="#"><div id="de_3">nº22 Victor </div></a> 
			<a href="#"><div id="de_4">nº23 Victor </div></a>
			
		</div>
		<a href="#top"><div id="back">Voltar ao topo</div></a>

      
		
		
		
		
		
	</div>
    </center>
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>


