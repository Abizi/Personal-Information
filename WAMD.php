<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-with initial-scale=1.0">
	<link rel="stylesheet" href="CSS\Menu.css" type="text/css">
    <link rel="stylesheet" href="CSS\ayput.css" type="text/css">
	<title>WAMD</title>
</head>

<body>
<div class="">

<div class="">
<form action="validate.php" method="post">
<fieldset>
<fieldset>
<legend>Personal Information</legend>
<label>First Name</label>			<br>
<input type="text" name="FNAME" placeholder="First Name" required>	<br>
<label>Last Name</label>			<br>
<input type="text" name="LNAME" placeholder="Last Name" required>	<br>
<label>Password</label>						<br>
<input type="password" name="PASSWORD" placeholder="Password" required> <br>
<label>Confrim Password</label>		<br>
<input type="password" name="CPASSWORD" placeholder="Confirm Password" required> <br>
<label>Date of Birth</label>		<br>
<input type="date" name="DOB" required>		<br>
<label>Program Level</label>		<br>
<input type="number" min="4" max="6" name="PROLEV">	<br>
<label>Phone Number</label>			<br>
<input type="text" name="PHONE" placeholder="Phone Number" required>	<br>
<label>Email Address</label>		<br>
<input type="text" name="EMAIL" placeholder="Email Address" required>	<br>
<label>Residential Address</label>	<br>
<input type="text" name="RADDRESS" required>	<br>
<label>Postal Address</label>		<br>
<input type="text" name="POSTADDRESS" required><br>
</fieldset>
<fieldset>
<legend>Next of Kin</legend>
<label>First Name</label>					<br>
<input type="text" name="KFNAME" placeholder="First Name" required>	<br>
<label>Last Name</label>					<br>
<input type="text" name="KLNAME" placeholder="Last Name" required>	<br>
<label>Email Address</label>		<br>
<input type="text" name="KINEMAIL" required>	<br>
<label>Phone Number</label>			<br>
<input type="text" name="KNIPHONE" required>	<br>
<label>Relationship</label>			<br>
<input type="text" name="RELATIONSHIP" required>	<br>
</fieldset>
<input type="submit">
</fieldset>
</form>
</div>

</div>
</body>
</html>