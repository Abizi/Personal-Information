<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-with initial-scale=1.0">
	<!--<link rel="stylesheet" href="CSS\Menu.css" type="text/css">-->
    <link rel="stylesheet" href="CSS\bootstrap.min.css" type="text/css">
	<title>WAMD &bull; Login</title>
    
</head>

<body>

<header>
<div class="jumbotron">
<div class="container">
<center><h1>The Mysterious CRUD Project</h1></center>
</div>
</div>
</header>

<!-- Our Sexy looking tab -->
<div class="container well">
<ul class="nav nav-tabs nav-justified">
<li><a href="WAMD.php" data-toggle="tab">Register</a></li>
<li class="active"><a href="#" data-toggle="tab">Login</a></li>
<li><a href="session.php" data-toggle="tab">Edit Records</a></li>
</ul>
</div>
<!--------------------------------------------------->

<!-- Login Stuff Below-->


<div class="container">
<form action="sanitize_login" method="post">
<div class="row form-group">

<div class="col-sm-4 col-sm-offset-4 well">
<legend>Login</legend>
<label>Email</label>				<br>
<input type="email" class="form-control" name="LOGEMAIL" placeholder="Email" required>			<br>
<label for="">Password</label>			<br>
<input type="password" class="form-control" name="LOGPASS" placeholder="Password" required>	<br>
<input type="submit" class="btn btn-primary" value="Login">
</div>

</div>
</form>
</div>


<!-- Login Stuff Above-->


<footer>
<div class="jumbotron">
<center><h6>Created by EJA Staff &copy; | Copyright <?php echo date("Y"); ?></h6></center>
</div>
</footer>

</body>
</html>
