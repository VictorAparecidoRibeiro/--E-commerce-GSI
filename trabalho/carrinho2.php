<?php
     session_start();
	 
	 if(!isset($_SESSION['carrinho']))
	 {
		 $_SESSION['carrinho'] = array();
		 
	 }
		 //inclui no carrinho
		 if(isset($_GET['acao']))
		 {
			 
			 if($_GET['acao'] == 'add')
			 {
				 $id= intval($_GET['id_produto']);
				 
				 if(!isset ($_SESSION['carrinho'][$id]))
				 {
					 $_SESSION['carrinho'] [$id] = 1;
				 }
				 else{
				     $_SESSION['carrinho'] [$id] +=1;
				 }
			 }
		 }
		 //print_r($_SESSION['carrinho'] );
		 
		 
		 //remove carrinho
		 
		 if($_GET['acao']=='del')
		 {
			 $id= intval($_GET['id_produto']);
			  if(isset($_SESSION['carrinho'] [$id]))
			  {
				  unset($_SESSION['carrinho'] [$id]);
			  }
		 }	  
		
         //alterar quantidade		 
			  
			   if($_GET['acao']== 'up' )
				   
				   if(is_array($_POST['prod']))
				   {
					   foreach($_POST['prod'] as $id => $qtde){
						   $id  = intval($id);
						  
						   if(empty($qtde) || $qtde <> 0){
							   $_SESSION['carrinho'] [$id] = $qtde;
							   
						   }else{
							   unset($_SESSION['carrinho'] [$id]);
						   }
							 
					   }
				   }
		
   
?>
<?php
include "recebeloguin.php";
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Carrinho</title>
<link rel= "stylesheet" type= "text/css" href= "estilo_carrinho.css"/>
<link rel="icon" href="logo.jpg" type="image/x-icon" />
</head>
<body>
    <center>
    <div id="mae_carrinho22">
	       
		   <div id="logo"><!-- div que vai ter a imagem do logo o carrinho e o login-->
				<div id="img_logo"><a href="index.php"> <img src="imagens/logo.jpg"> </a> <!-- onde vai ficar a imagem do logo -->
				</div>
				
				<div id="icones_logo">
				
					<div id="icone_loguin">

					
			
						  <div id='texto_loguin'><?php echo "Bem Vindo.".$user; ?></div>
						
						<div id="img_loguin"> 
						
						
						<?php if(!isset($_SESSION['logou']))
						{?>
						
							<a href="logar.php">  <img src="imagens/home_loguin.jpg"> </a> 
						<div id="dados_mc">
			
			<button id="myBtn" class="myButton">Login</button>

			<!-- The Modal -->
			<div id="myModal0" class="modal_mc">

			  <!-- Modal content -->
			  <div class="content_mc">
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
		
		<br>
		<br>
		<hr>

		<center> <H1> CARRINHO  </H1> </center>
        <br>
		<hr>
			<BR>
	
	<form action="?acao=up" method="POST">
	
		
    <div id="prod_car22">
	<?php
			$soma=0;
							if(!isset($_SESSION['logou']))
							{
								echo "<script> alert('É necessário login para acessar o carrinho !!'); </script>";
								echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
							}
							
					        if(count($_SESSION['carrinho']) == 0)
							{
								echo "Nenhum produto selecionado no carrinho";
							
							}
							
							else
							{
							   include "conectar.php";
								
									foreach($_SESSION['carrinho'] as $id => $qtde)
									{
											
											$sql = "select nome, imagem, valor from produtos where id_produto = '$id' ";	
												$res = pg_query($conecta, $sql);
												$regs = pg_num_rows($res);
													$linha = pg_fetch_array($res);
										
											$sub  = $linha['valor'] * $qtde;
											$soma = $soma + $sub;
	?>					                    
                                            	
											<div id="jun_car22">
											
													<div id="imagem_car22">
												
													<?php
													   echo "<img src='imagens_produtos/produto_".$id.".jpg' height='90' width='90'>";
													?>
													</div>
													
													<div id="desc_car22">
													<hr>
													<p align='left'> 
														<?php
														  echo "<b>Nome: </b> ".$linha['nome']."<br>";
														  echo "<b>Quantidade: </b>";
														  echo  "1";	
														  echo "<br><b>Valor Unitário: </b>".number_format($linha['valor'], 2, ',', '.')."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b> valor total: </b>".number_format($sub, 2, ',', '.')."<br>";
														  echo '<a href="?acao=del&id_produto='.$id.'">Remove do carrinho  </a>';
														  echo "<br><br>";
														?>
													</p>	
														</div>
												</div>	
												
									 <?php
									}					    			
							}
          ?>
	
		   <div id="at_car22">
		   
	          <br>
			  <br>
			  <input type="submit" value="atualizar carrinho"/>
			  <a href="mostrar.php"> <div id="btn">COMPRAR +</div></a>
             
			<?php
			
				if(count($_SESSION['carrinho']) != 0)
				{
					?>
					<a href="finalizar_compra.php?soma=<?php echo $soma?>"> <div id="btn">Finalizar Compra</div></a> 
				<?php	
				}
				?> 
			  	
			</div>
		 
					
     </div>
	 
	
	 
	 <h3>
	 <p align="center">
	 <div id="total_car22">
	 <hr>
	 <?php
	 
	   echo "Valor da compra:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp R$:".number_format($soma, 2, ',', '.');
	 ?>
	  <hr>
	  </div>
	  </p>	  
		
	  </h3>
	
	 
	

	</form>

	
	
	
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
// Get the modal
var modal = document.getElementById('myModal3');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption3");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
	<script>
// Get the modal
var modal = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption2");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal1');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption1");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img0");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal0');

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


