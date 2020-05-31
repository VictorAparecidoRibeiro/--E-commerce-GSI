<!DOCTYPE html>
<html lang="pt-br">
<head>
      <title>Pesquisa de usuário por nome</title>
	  <meta charset="UTF-8">
</head>
<body>

      <form method="GET" action="AdmPesquisaUser.php">
	  <br>Nome do Produto:<p><input type="textbox" id="nome" name="nome" ></center></p>
	  <input type="submit" class="submit" value="Pesquisar">
	  </form>
      <?php
	    include "conectar.php";
        $pesquisa = strtolower($_GET["nome"]);
		$nome="lower(nome) like '%$pesquisa%'";
	    $sql="select * from usuarios where loguin='".$_GET['nome']."'and excluido='n' and tipo = 0;";
		$resultado= pg_query($conecta, $sql);
	    $qtde=pg_num_rows($resultado);
		
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
				
			echo "Usuarios encontrados com sucesso :<br><br>";
			for ($cont=1; $cont <= 10; $cont++)
				{
				
					
					$linha = pg_fetch_array($resultado,$contador_valores++);
					echo "LOGIN: ".$linha['login']."<br>";
					echo "NOME: ".$linha['nome']."<br>";
					echo "SOBRENOME: ".$linha['sobrenome']."<br>";
					echo "TIPO: ".$linha['tipo']."<br>";
					echo "DATA DE NASCIMENTO: ".$linha['data_nasc']."<br>";
					echo "NUMERO DE COMPRAS: ".$linha['no_compras']."<br>";
					echo "GENERO: ".$linha['genero']."<br>";
					echo "EMAIL: ".$linha['email']."<br>";		
					echo "EXCLUIDO: ".$linha['excluido']."<br>";	
					
					echo "<a href='exclusao.php?login=$linha[0]'> - EXCLUIR </a> <br><br>";
					
					if($pagina * 10 - 10 + $cont >= $quantidade)
						break;
				
				}
				$pagina++;

				foreach(range(1,$total_paginas)as $mostra_paginas)
				{
					echo "  <a href=usuarios.php?pagina=".$mostra_paginas.">   ".$mostra_paginas."</a>";
				}
	
			}
			else
			{
				echo "Não foi encontrado nenhum usuario !!!<br><br>";
			}
      ?>
	  </p>
		 <input type="button" value="Voltar Para o Menu" onclick="location. href='../adm.php' "> 
	  
</body>
</html>