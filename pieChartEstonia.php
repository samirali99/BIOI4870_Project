<?php  

$server="localhost";
$username="samirali";
$password="";
$database="samirali";

$connect = mysqli_connect($server,$username,"",$database);

if($connect->connect_error){
	echo "Something has gone terribly wrong";
	echo "Connection error:" .$connect->connect_error;
}

 $query = "SELECT phylum, numOf FROM estoniaCount";  
 $result = mysqli_query($connect, $query);  


 mysqli_close($connect);
?>

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  

           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Phylum', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["phylum"]."', ".$row["numOf"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Phylum Composition of Estonia',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Phylum Composition</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  