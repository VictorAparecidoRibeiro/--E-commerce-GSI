<!DOCTYPE html>
<html>
  <head>
  <?php 
	include "filesDB/config.php";
	include "filesDB/conexao.php";
	include "filesDB/database.php";
	$dados = PGSeleciona("produtos_compra",null,"count(qtde) as qtd","group by total ",null);
    //var_dump($dados);exit;
 ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Quantidade", { role: "style" } ],
        <?php 
        if($dados){
          foreach ($dados as $value) {
          echo "['".$value['total']."', ".$value['qtd'].", '#b87333'],";
          }
        }
         ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Relação de quantidade de produtos vendidos por preço",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  <body>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>

  </body>
</html>