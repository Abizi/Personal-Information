<?php
require_once 'database.php';
	session_start();
	
	$salt1 = "@€‹£";
	$salt2 = "™¢¶∞";
	
	function queryDB($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		return $result;
	}



$logEmailErr = $logPassErr = "";
$logEmail = $logPass = "";

//check for request method
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//Check for invalidity
	if (empty($_POST["LOGEMAIL"])){
		$logEmailErr = "Please enter Your Email!";
	}
	else {
		$logEmail = test_form($_POST["LOGEMAIL"]);
		//check if email format is valid
		if (!filter_var($logEmail,FILTER_VALIDATE_EMAIL)){
			$logEmailErr = "Invalid Email format!";
		}
	}
	if (empty($_POST["LOGPASS"])){
		$logPassErr = "Please enter your password!";
	}
	else {
		$logPass = test_form($_POST["LOGPASS"]);
		//check if input contains invalid characters
		if (!preg_match("/^[a-zA-Z ]*$/",$logPass)){
			$logPassErr = "Only letters and whitespace allowed!";
		}
	}	
}
	
	


	/*
	 * Login
	 */
	if(isset($_POST['LOGEMAIL']) && isset($_POST['LOGPASS']) && !empty($_POST['LOGEMAIL']) && !empty($_POST['LOGPASS'])){
		$email = sanitizeString($_POST['LOGEMAIL']);
		$pass = sanitizeString($_POST['LOGPASS']);
		
		$pass = hash('ripemd128', $salt1.$pass.$salt2 );
		$query = "SELECT * FROM user WHERE password='$pass' AND email='$email' ";
		$result = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result) == 0){
			echo"<span id='noMatch'>Incorrect email and password combination. <a href='/rookie'>Try again</a></span";
			die("0");
		}
			
		
		else{
			$_SESSION['mail'] = $email;
			header("location:session.php");
		}
			
	}
	

function test_form($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>