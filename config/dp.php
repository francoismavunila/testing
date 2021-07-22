<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asset management";

$conn = mysqli_connect($servername,$username,$password,$dbname ) or die('we are sorry we can not connect at the moment' );

echo("connection successful");
?>