<?php
    $username="root";
    $password="";
    $database="dbsparkbank";
    $servername="localhost";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}
?>