<?php require_once 'config/connection.php' ?>
<?php $query = "select * from pie";
$result = mysqli_query($conn, $query);

while($value = mysqli_fetch_assoc($result))
{
    echo $value['Name'].$value['Values'];
}

?>


<!doctype html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Pie Chart in Php</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          <?php
          
            while($value = mysqli_fetch_assoc($result))
            {
                echo "['".$chart['Name']."',".$chart['Values']."],";
            }

          ?>
        ]);

        var options = {
          title: 'Phylum Composition'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

 </head>
 <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
 </body>   
</html>
