<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bangtan";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) 
{

	die("failed to connect!");
}

?>