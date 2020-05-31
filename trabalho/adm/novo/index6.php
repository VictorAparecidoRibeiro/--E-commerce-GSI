<html>
  <head>
    <?php 
	include "filesDB/config.php";
	include "filesDB/conexao.php";
	include "filesDB/database.php";
	$dados = PGSeleciona("produtos","excluido = 'n'","tamanho,count(*) AS qtd","GROUP BY tamanho");
	// var_dump($dados);
	// exit;

 ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Tamanho Produtos'],
		  <?php 
          
			if($dados){
				foreach ($dados as $value) {
			        echo "['".$value['tamanho']."', ".$value['qtd']."],";
				}
			} else {
			    echo "['Sem movimento',0,'green'],";
			}


           ?>
          
        ]);

        var options = {
          title: 'Tamanho Produtos',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>