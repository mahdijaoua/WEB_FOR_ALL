<?php

$con = mysqli_connect("localhost","root","","transport");  
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['id', 'prix'],
         <?php
         $sql = "SELECT * FROM article";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['id']."',".$result['prix']."],";          }

         ?>
        ]);

        var options = {
          title: 'Voici les statistiques des prix '
        };

        var chart = new google.visualization.BarChart(document.getElementById('barchart_values'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="barchart_values" style="width: 900px; height: 550px;"></div>
    <button type="submit" class="btn btn-success" style="width: 200px;" onclick="location.href='http://localhost/prj_f/back/view/afficherRessources.php'">La liste des Ressources</button>
  </body>
</html>
