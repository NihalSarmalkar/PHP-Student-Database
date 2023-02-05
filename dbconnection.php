<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "crudajax";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection Failed");
}

?>