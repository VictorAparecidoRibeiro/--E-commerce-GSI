<?php
	include "recebeloguin.php";
	
	
	if(isset($_SESSION['logou']))
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";

?>


<html lang="PT-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Registro</title>
	<link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
	<link rel= "stylesheet" type= "text/css" href= "estilo.css" />
	<link rel= "stylesheet" type= "text/css" href= "estilo_logar.css" />

	<script language="JavaScript" src="arquivo.js"></script>
	<link rel="icon" href="logo.jpg" type="image/x-icon" />
	<script>
			function verifica_senhaIguais(senha, senhaC)
			{
				var senha = OK;
				var senhaC = senha2;
				senhas = 0;
				mostra = document.getElementById("mostrar");
				if( OK == senha2){
					senhas +=1;
				}else{
					senhas +=2;
				}
				return mostrar_senhaIguais();
			}
			function mostrar_senhaIguais()
			{
			if(senhas == 1){
				alert('<tr><td ></td><td> <b>Senhas iguais</td></tr>');
			}
				else{
				mostra.innerHTML = '<tr><td></td><td> <b>Senhas não conferem</td></tr>';
			}

			}
		</script>

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
						 <div id="dados_mc">
			
		

			<!-- The Modal -->
			<div id="myModal" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content">
				<span class="close">×</span>
				
				<div id="form">
			  <form action="checarlogin.php" method="POST">
				<label for="fname">Login</label>
				<input id="campo_mc" type="text"  name="login">

				<label for="lname">Senha</label>
				<input id="campo_mc" type="password"  name="password">

			 
			  
				<input id="enviar_mc"type="submit" value="Enviar">
			  </form>
			</div>
			  </div>

			  
			</div>

			
					
				
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


						
						<div id="texto_carrinho"> CARRINHO DE COMPRAS	</div>
					

					
						<div id="img_carrinho"> 
						
							<a href="carrinho2.php">
							
							<img src="imagens/home_carrinho.jpg">
							
							
							</a>
						
						
						</div>
						
					
					
					</div>
				
					
				</div>
				
				
				
				
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
		<hr>
		<center> <H1>CADASTRO</H1> <hr>
		
		<br><br>
		
			<H1> TODOS OS CAMPOS SÃO OBRIGATORIO </H1>
		
			</center> 
			<div id="registro">
			
				<form action="cadastro.php" method="POST" name="f1">
			
				<div id="campo_login_r">
						
					<div class="campo_registro1"/>	Login: </div>
						
					<div class="campo_registro2"/>	<input required placeholder="USUÁRIO" type="text"  name="login"> </div>
						
				</div>
			
				<div id="campo_senha_r">
						
						<div class="campo_registro1">Senha: </div>
						<!-- força de senha -->
						<script type="text/javascript" src="senha.js"></script> 
						
						<div class="campo_registro2"> 
						
							<input required placeholder="SENHA" id="OK" type="password" name="OK" size="20" id="senha" onkeyup="checa_seguranca('OK', 'pass');" />
						
						</div>

						<br><br>
						<br>
						<div id="pass"></div>
						<br><br>
						<br>
						<br>
						
				
						<br>
									
				</div>
			
			
				<div id="cadastro_nome">
					
				<div class="campo_registro1"/>	Nome: </div>
				
				<div class="campo_registro2">	<input placeholder="NOME" type="text" name="nome" id="nome"required > </div>
			
				</div>
			
				<div id="cadastro_sobrenome">
					
				<div class="campo_registro1"/>	Sobrenome: </div>
				
				<div class="campo_registro2"/>	<input placeholder="SOBRENOME" type="text" name="sobrenome"id="sobrenome" required > </div>
			
				</div>
				
				<div id="cadastro_email">
				
					<div class="campo_registro1"/>E-Mail: <br></div>
					<div class="campo_registro2"/><input placeholder="E-MAIL" type="email" name="email" required> </div>
					
				</div>
			
				<input type="hidden" name="tipo" id="tipo" value="0">

				<input type="hidden" name="excluido" id="excluido" value="n">
				
				
				<div id="cadastro_data-nasc">
				Data de Nascimento: <br>
				<input type="date" name="datanasc" min="1940-01-01" id="datanasc"required><br>
			
				</div>
				
				<input type="hidden" name="nocompras" id="nocompra"value="0">
				
				
				<div id="cadastro_genero">
					
					<br>Gênero: <br>
					<input type="radio" id="M" name="sexo" value="M">
					<label for="M"> Masculino </label>
					
					<br>
					<br>
					<input type="radio" id="F" name="sexo" value="F">
					<label for="F"> Feminino </label>
					
					<br>
					<br>
					<input type="radio" id="O" name="sexo" value="O">
					<label for="O"> Outros </label>
					
				</div>

				<div id="input_r">	<input id="unput button" type="submit" value="Enviar"> </div>
			
			</div>
		
			</form>
		
			
		
		
		
		<div id="links_cadastro">
		
				<a href="index.php"> <div id="btn">Início</div></a> 
				<a href="contato.php"> <div id="btn">Contato</div></a> <!-- o link dos botões -->
				<a href="curiosidades.php"> <div id="btn">Curiosidades</div></a> 
				<a href="desenvolvedores.php"> <div id="btn">Desenvolvedores</div></a>
				<a href="mostrar.php"> <div id="btn">Produtos</div></a> 
				
		</div>
		
		
		
		
	
		
		<div id="mapa_logar">
			<h3> Mapa do site </h3><br>
			
			<div id="colun1">
				<br>
				<b class="link_mapa" ><font size="3" color="black">Sites Úteis</font> </b><br>
				<a class="link_mapa" href="http://www.cti.feb.unesp.br/">CTI</a><br>
				<a class="link_mapa" href="http://www.unesp.br/">Unesp</a><br>
				
			</div>
			
			<div id="colun1">
				<br>
				<b class="link_mapa"><font size="3" color="black">Curiosidades</font> </b><br>
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
		  	
		</div>
		
			<a href="#top"><div id="back">Voltar ao topo</div></a>
			
			</div>
			</center>






</body>
</html>