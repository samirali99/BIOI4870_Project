<html>
    <!-- format homepage
    -->
    <head>
    <!-- Retrieve date and state from user to be used for query
    -->
        <h1> Welcome to the Microbiome Comparison Website!</h1>
        <body>
            
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

echo '<a href ="pieChartRussia.php">Phylum Composition of Russia</a>';
echo '<br>';
echo '<a href ="pieChartEstonia.php">Phylum Composition of Estonia</a>';
echo '<br>';
echo '<a href ="pieChartFinland.php">Phylum Composition of Finland</a>';

?>