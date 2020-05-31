<html>
  <head>
  <?php 
	include "filesDB/config.php";
	include "filesDB/conexao.php";
	include "filesDB/database.php";
	$dados = PGSeleciona("usuarios","tipo = 0 AND excluido = 'n'","(extract(year from age(usuarios.data_nasc)))as qtd",null);
	// var_dump($dados);
	// exit;

 ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Idade', 'Idade'],
          <?php 
          
			if($dados){
				foreach ($dados as $value) {
			        echo "['".$value['data_nasc']."', ".$value['qtd']."],";
				}
			} else {
			    echo "['Sem movimento',0,'green'],";
			}


           ?>
        ]);

        var options = {
          title: 'Idade dos usuários',
          hAxis: {title: 'Idade', minValue: 0, maxValue: 15},
          vAxis: {title: 'Idade', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>