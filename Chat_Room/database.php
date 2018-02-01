<?php
//connect to MySql
$con= mysqli_connect("localhost","root","1234","messenger");

//Test Connnection

if(!$con){
	echo 'Failed to connect to MySQL:'.$con;
}



?>