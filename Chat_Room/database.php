<?php
//connect to MySql
$con= mysqli_connect("localhost","root","****","messenger"); //password protected

//Test Connnection

if(!$con){
	echo 'Failed to connect to MySQL:'.$con;
}



?>
