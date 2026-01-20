<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'notebook';
$mysqli = mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_error()) echo mysqli_connect_error();

?>

