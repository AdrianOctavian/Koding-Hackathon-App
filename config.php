<?php
$servername = "localhost";
$username = "root";
$password = "qwerty";
$database = "hackathon";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

@mysql_result(mysql_query("SELECT DATABASE();"),0);

//Select a database to work with
//$selected = mysql_select_db("hackathon",$conn)
 // or die("Could not select database");
?> 