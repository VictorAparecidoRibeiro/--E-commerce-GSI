<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8" />
 <title>RESTAURAÇÃO</title>
 <link rel= "stylesheet" type= "text/css" href= "estilo_adm.css"/> 
 
	<?php
	
			session_start();
	if (!isset($_SESSION["logou"]) or $_SESSION['tipo'] != 1) // se a variavel ‘logou’ não existe
	{ //significa que o usuário não foi autenticado, então, volta para index
		echo "<script> alert('Acesso NEGADO !!!!'); </script>";	
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../index.php'>";
		exit;
			
	}
	
	
	?>
 
 
 </head>
 <body>
 
 <center>
	 <div id= "restaurar">
		 <h1>USUARIOS PARA RESTAURAR </h1> 
		 <HR>
		 <center>
			   <h4> USUARIOS QUE EXCLUIRAM A CONTA</h4>
		 </center>
		 <hr>
			<p align="left">
                
              
			   
			 
			 <?php
			 
				session_start();
				 $login=strtolower($_GET['login']);
				 include "conectar.php";
				 $sql="select * from usuarios where login like '%$login%' and excluido='s' ";
				 $resultado= pg_query($conecta, $sql);
				 $qtde=pg_num_rows($resultado);
				 $quantidade = pg_affected_rows($resultado);
			 $total_paginas = ceil($quantidade/10);
			 
            ?>
            <p align="left">        
                    Pesquisar:</p>
                    <form align="left" method="GET" action="res_usuario.php">
                        Login:
                         <input type="textbox" id="login" name="login">
                        <input type="submit" value="Pesquisar">
                    </form>

             <p align="left"> 
            <?php
			 
			 if ($qtde > 0)
			 {
				 if(isset($_GET['pagina']))
				{
					$pagina = $_GET['pagina'];
					
				}
				
				else
				{
					$pagina = 1;

				}
				
				
					if($pagina != 1)
						$contador_valores = ($pagina * 10) - 10;

					else
						$contador_valores = 0;
				
					for ($cont=1; $cont <=10; $cont++)
					{
						$linha = pg_fetch_array($resultado,$contador_valores++);
						echo "LOGIN....: ".$linha['login']."<br>";
						echo "NOME....: ".$linha['nome']."<br>";
						echo "SOBRENOME....: ".$linha['sobrenome']."<br>";
						echo "TIPO....: ".$linha['tipo']."<br>";
						echo "DATA DE NASCIMENTO....: ".$linha['data_nasc']."<br>";
						echo "NUMERO DE COMPRAS....: ".$linha['no_compras']."<br>";
						echo "SENHA....: ".$linha['senha']."<br>";
						echo "GENERO....: ".$linha['genero']."<br>";
						echo "EMAIL....: ".$linha['email']."<br>";		
						echo "EXCLUIDO....: ".$linha['excluido']."<br>";	
						
						echo "<a href='conf_res_usuario.php?login=$linha[0]'> RESTAURAR </a> <br><br>";
					 
						if($pagina * 10 - 10 + $cont >= $quantidade)
							break;
					 
					 
					}
						
					$pagina++;
					foreach(range(1,$total_paginas)as $mostra_paginas)
					{
						echo "  <a href=res_usuario.php?pagina=".$mostra_paginas.">   ".$mostra_paginas."</a>";
					}
					
					
				}
				else
					echo "Não foi encontrado nenhum usuario !!!<br><br>";
			 ?>
			 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
			 	</div>
 </center>
			 
			 
 </body>
 
</html>
