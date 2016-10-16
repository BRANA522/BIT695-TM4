<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afplayers";

// create connection 
$con = mysqli_connect($servername, $username, $password, $dbname);

//check connection 

if(!$con)
	{
	die('connection failed '.mysqli_connect_error());
    }
else 
{
	
}	

?>