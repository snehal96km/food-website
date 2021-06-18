<?php
$hostname="localhost";
$port="3307";
$db="demo_db";
$username="root";
$password="usbw";



try
{
 	 $mysql = new PDO("mysql:host=$hostname;port=$port;dbname=$db", $username, $password);
	 $mysql->exec("set names utf8");
	
   	 /*** echo a message saying we have connected ***/
   	//echo 'Connected to database';
   	// $conn = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }	
	//PDO connection end






?>