<!DOCTYPE html>
<html>
  <head>
  <?php 
	include "filesDB/config.php";
	include "filesDB/conexao.php";
	include "filesDB/database.php";
	$dados = PGSeleciona("usuarios","tipo = 0 AND excluido = 'n'","genero,count(*) as qtd","group by genero");
	// var_dump($dados);
	// exit;

 ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Gênero'],
          <?php 
          
			if($dados){
				foreach ($dados as $value) {
			        echo "['".$value['genero']."', ".$value['qtd']."],";
				}
			} else {
			    echo "['Sem movimento',0,'green'],";
			}


           ?>
        ]);

        var options = {
          title: 'Gênero'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
   <?php echo PROJ_NOME ?>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>