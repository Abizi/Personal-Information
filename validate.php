<?php
$fname = $lname = $dob = $prolev = $phone = $email = $raddress = $postaddress = $kinname = $kinemail = $kinphone = "";

$fname = test_form($_POST[""]);
$lname = test_form($_POST[""]);
$dob = test_form($_POST[""]);
$prolev = test_form($_POST[""]);
$phone = test_form($_POST[""]);
$email = test_form($_POST[""]);
$raddress = test_form($_POST[""]);
$postaddress = test_form($_POST[""]);
$kinname = test_form($_POST[""]);
$kinemail = test_form($_POST[""]);
$kinphone = test_form($_POST[""]);


function test_form($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>