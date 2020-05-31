<!--<?php
	include "recebeloguin.php";
	include "conectar.php";
	
		if(!isset($_SESSION['logou']))
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
		
		
			if($_SESSION['tipo'] == '1')
		{
			echo "<script> alert('Adiministradores não podem alterar dados !');</script>";
			echo "<meta HTTP-EQUIV = 'refresh' CONTENT='0;URL=index.php'>";
		}
		
		
		
		$login = $_SESSION['login'];
			
		$sql_dados = "select * from usuarios where login = '$login';";
		
		$res_dados = pg_query($conecta,$sql_dados);
		
		$linha_dados = pg_fetch_array($res_dados);
?>

-->
<html lang="PT-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Minha Conta</title>
	<link rel= "stylesheet" type= "text/css" href= "estilo_mc.css" />
	<link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
	<script language="JavaScript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
	
	
	
    <center>
    <div id="mae">
	       
		   <div id="logo"><!-- div que vai ter a imagem do logo o carrinho e o login-->
				<div id="img_logo">
					<a href="index.php"> <img src="imagens/logo.jpg"> </a> <!-- onde vai ficar a imagem do logo -->
				</div>
				
				
				<div id="icones_logo">
				
					<div id="icone_loguin">

					
			
						  <div id='texto_loguin'><?php echo "Bem Vindo.".$user; ?></div>
						
						<div id="img_loguin"> 
						
						
						<?php if(!isset($_SESSION['logou']))
						{?>
							
							<a href="logar.php">  <img src="imagens/home_loguin.jpg"> </a> 
						    <br> <a href="logar.php">Login</a>
						
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
					
						
						if($_SESSION['tipo'] != '0')
						{
							?>
							
							<div id="botao_adm">
								
								<a href="adm/adm.php"/> <div id="btn"> ADMINISTRADOR </div> </a>
							
							</div>			
							
				<?php   }	
				 	
					
						if(isset($_SESSION['logou']))
						{			
				?>	
				
					<div id="botao_minhaconta">
								<br><br>
						<a href="minhaconta.php"/> <div class="btn_minhaconta" id="btn"> Minha Conta </div> </a>
		
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
		
		<center>
		
		<div id="submae_mc">
			
			<div id="dados_mc">
				<div class="cabeçalho_alterasenha">	
			
				<a href="#0" id="cabeçalho_hover_alterasenha"/>Alterar Senha</a>		
						
				<div id="input_alterasenha" style="display: none;">	

					<div id="form">
				  <form action="altera_config_users/altera_senha.php" method="POST">
				  
					<label for="fname">Senha Antiga</label>
					<input id="campo_mc" type="password"  name="password" required />

					<label for="lname">Nova Senha</label>
					<input id="campo_mc" type="password"  name="new_password" required />
					
					<label for="lname">Repitir Nova Senha</label>
					<input id="campo_mc" type="password"  name="new_password2" required />

				 
				  
					<input type="submit" id="enviar_mc" value="Enviar">
				  </form>
				  
					</div>
				</div>
				
				</div>
				
				<div id="historico_compra"/>
				
				<iframe src="http://200.145.153.175/victorribeiro/trabalho/historico.php" width="300" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				</div>
				
				<div id="formulario" align="left">
					<form method="POST" action="altera_config_users/altera_config.php">
					<label for="nome_mc"> Nome: </label><br>
					<input class="campos_mc_2" type="text" name="nome_mc" value="<?php echo $linha_dados['nome'];?>" id="nome_mc" required>
					<br>
					<br>
					<label for="sobrenome_mc"> Sobrenome: </label><br>
					<input class="campos_mc_2" type="text" value="<?php echo $linha_dados['sobrenome'];?>" name="sobrenome_mc" id="sobrenome_mc" required>
					<br>
					<br>
					<label for="datanasc_mc"> Data de Nascimento: </label><br>
					<input class="campos_mc_2" type="date" name="datanasc" min="1940-01-01" value="<?php echo $linha_dados['data_nasc'] ?>" id="datanasc"required><br>
					<br>
				
										
					
					<label for="email_mc"> E-mail: </label><br>
					<input class="campos_mc_2" type="email" value="<?php echo $linha_dados['email'];?>" name="email_mc" id="email_mc" required>
					<br><br>
					<input type="submit" value="Alterar">
					
					<input type="hidden" name="tipo" value="<?php echo $linha_dados['tipo'];?>">
					<input type="hidden" name="excluido" value="<?php echo $linha_dados['excluido'];?>">
					<input type="hidden" name="no_compras" value="<?php echo $linha_dados['no_compras'];?>">
					<input type="hidden" name="sexo" value="<?php echo $linha_dados['genero'];?>">
					<input type="hidden" name="password" value="<?php echo $linha_dados['senha'];?>">
					
					
					
					
					
					</form>
				</div>
				
			</div> 	

		</div>
		</center>
		<div id="links_cadastro">
		
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
		
			 <div id="desenvolvedores_cadastro">

			<a href="desenvolvedores.php"><div id="de_1">nº17 Matheus </div></a> 
			<a href="desenvolvedores.php"><div id="de_2">nº21 Thiago </div></a> 
			<a href="desenvolvedores.php"><div id="de_3">nº22 Victor </div></a> 
			<a href="desenvolvedores.php"><div id="de_4">nº23 Victor </div></a>
			
             		
			</div>
		
			<a href="#top"><div id="back">Voltar ao topo</div></a>
			</div>
			
			</center>

			
			
			
			
			<!------- JS -------->
			
		</div>	
			
			
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btn_js");

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

<script language="JavaScript">

	jQuery(document).ready(function($)
{
  $("#cabeçalho_hover_alterasenha").click(function()
  {
    
    $("#input_alterasenha").slideToggle("fast");
    
	  if ($("#cabeçalho_hover_alterasenha").text() == "Alterar Senha")
      {			
        $("#cabeçalho_hover_alterasenha").html("Alterar Senha")
      }
	  else 
      {		
        $("#cabeçalho_hover_alterasenha").text("Alterar Senha")
      }
    
  });  
  
 });  

	


</script>

</body>
</html>