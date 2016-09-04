<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//$sql = "CREATE DATABASE crud";
//if ($conn->query($sql) === TRUE) {
//	echo "";
//} else {
//	echo "error creating database: " . $conn->error;
//}


//$sql = "CREATE TABLE person (
//ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//password VARCHAR(30) NOT NULL,
//dob TIMESTAMP,
//proglev INT(1) UNSIGNED,
//phone_number INT(10) UNSIGNED,
//email VARCHAR(50) NOT NULL,
//resaddress VARCHAR(100) NOT NULL,
//postaddress VARCHAR(100) NOT NULL
//)";

//$sql = "CREATE TABLE nextofkin (
//ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50) NOT NULL,
//phone_number INT(10) UNSIGNED,
//relationship VARCHAR(30) NOT NULL
//)";
//
//if ($conn->query($sql) === TRUE) {
//	echo "nextofkin table created";
//} else {
//	echo "Error creating table: " .$conn->error;	
//}
$conn->close();
?>









