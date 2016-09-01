<?php
$fname = $lname = $dob = $prolev = $phone = $email = $raddress = $postaddress = $kinname = $kinemail = $kinphone = "";

if ($_SERVER["REQUEST_METHOD"] == )
$fname = test_form($_POST["FNAME"]);
$lname = test_form($_POST["LNAME"]);
$dob = test_form($_POST["DOB"]);
$prolev = test_form($_POST["PROLEV"]);
$phone = test_form($_POST["PHONE"]);
$email = test_form($_POST["EMAIL"]);
$raddress = test_form($_POST["RADDRESS"]);
$postaddress = test_form($_POST["POSTADDRESS"]);
$kinname = test_form($_POST["KINNAME"]);
$kinemail = test_form($_POST["KINEMAIL"]);
$kinphone = test_form($_POST["KINPHONE"]);


function test_form($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>