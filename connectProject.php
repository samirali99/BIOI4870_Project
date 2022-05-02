
<html>
    <!-- format homepage
    -->
    <head>
    <!-- Retrieve date and state from user to be used for query
    -->
        <h1> Welcome to the Microbiome Comparison Website!</h1>
        <body>
            <!--
            <form action = "connectProject.php" method="get">
                Enter the date you are looking for: <input type = "text" name = "date">
                Enter the state you are looking for: <input type = "text" name = "state">
                <input type = "submit" value="submit">
            </form>
            <br>
            -->
        </body>
    </head>
</html>
<?php

/*Connection variables at top
* Makes it easy to change if needed*/
$server="localhost";
$username="samirali";
$password="";
$database="samirali";

/*Connect to my database
* and throw errors if its unable to connect.
* Greets the web user if it is able to connect.*/
$connect = mysqli_connect($server,$username,"",$database);

if($connect->connect_error){
	echo "Something has gone terribly wrong";
	echo "Connection error:" .$connect->connect_error;
}

$query = "select Phylum from ESTONIA";
$result = mysqli_query($connect, $query);

$query2 = "select Phylum from RUSSIA";
$result2 = mysqli_query($connect, $query2);

$query3 = "select Phylum from FINLAND";
$result3 = mysqli_query($connect, $query3);

$PhylumList = array("Proteobacteria", "Bacteroidota", "Firmicutes", "Actinobacteriota", "Desulfobacterota", "Fusobacteriota", 
"Bdellovibrionota", "Myxococcota", "Campilobacterota", "Verrucomicrobiota", "Cyanobacteria");

$CounterList = array($Proteobacteria = 0,$Bacteriodota = 0,$Firmicutes = 0,$Actinobacteria = 0,$Desulfobacterota = 0,$Fusobacteriota = 0,
$Bdellovibrionota = 0,$Myxococcota = 0,$Campilobacterota = 0,$Verrucomicrobiota = 0,$Cyanobacteria = 0);


$EstCounterList = array(0,0,0,0,0,0,0,0,0,0,0);
$RusCounterList = array(0,0,0,0,0,0,0,0,0,0,0);
$FinCounterList = array(0,0,0,0,0,0,0,0,0,0,0);



/*If there are results from the query, print the 0th
 * token in the current tuple from the result relation
 * If there are no results, print an error message.
 */
if ($result = mysqli_query($connect, $query)) {
    while ($row = mysqli_fetch_array($result)) {
        for ($x = 0; $x <= count($PhylumList); $x++) {
            if ($row[0] == $PhylumList[$x]){
                $EstCounterList[$x]++;
            }
        }

    }
}else{
	echo "No results";
}

if ($result2 = mysqli_query($connect, $query2)) {
    while ($row = mysqli_fetch_array($result2)) {
        for ($x = 0; $x <= count($PhylumList); $x++) {
            if ($row[0] == $PhylumList[$x]){
                $RusCounterList[$x]++;
            }
        }

    }
}else{
	echo "No results";
}

if ($result3 = mysqli_query($connect, $query3)) {
    while ($row = mysqli_fetch_array($result3)) {
        for ($x = 0; $x <= count($PhylumList); $x++) {
            if ($row[0] == $PhylumList[$x]){
                $FinCounterList[$x]++;
            }
        }

    }
}else{
	echo "No results";
}

echo '<pre>'; print_r($EstCounterList); echo '</pre>';

echo '<pre>'; print_r($RusCounterList); echo '</pre>';

echo '<pre>'; print_r($FinCounterList); echo '</pre>';



$PhylumList = array("Proteobacteria", "Bacteroidota", "Firmicutes", "Actinobacteriota", "Desulfobacterota", "Fusobacteriota", 
"Bdellovibrionota", "Myxococcota", "Campilobacterota", "Verrucomicrobiota", "Cyanobacteria");

/*Always close your connection. 
 * Its a courtesy to your fellow users.
 */
mysqli_close($connect);
?>

