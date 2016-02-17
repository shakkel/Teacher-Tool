<!DOCTYPE html>
<?php 
require 'inc/session.php';
require 'inc/mysql.php';
?>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teacher Tool</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/main.css">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.io/jquery.form.js"></script>
	<script src="js/hashchange.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</head>
<body onload="">

<?php
if($_SESSION)
{
	echo '<script type="text/javascript">$(document).ready(function() {hidelogin();});</script>';
	echo '<script type="text/javascript">$(document).ready(function() {loadKlassen();});</script>';
}
?>

<nav id="navbar" class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Teacher Tool</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Klassen<span class="caret"></span></a>
				<ul id="1drop" class="dropdown-menu">
					<li id="1drop1-l1"><a id="1drop1-a" href="#">Dropdown 1-1</a></li>
					<li id="1drop2-li"><a id="1drop2-a" href="#">Dropdown 1-2</a></li>
					<li id="1drop3-li"><a id="1drop3-a" href="#">Dropdown 1-3</a></li>
					<li id="1drop4-l1"><a id="1drop4-a" href="#">Dropdown 1-4</a></li>
					<li id="1drop5-li"><a id="1drop5-a" href="#">Dropdown 1-5</a></li>
					<li id="1drop6-li"><a id="1drop6-a" href="#">Dropdown 1-6</a></li>
					<li id="1drop7-l1"><a id="1drop7-a" href="#">Dropdown 1-7</a></li>
					<li id="1drop8-li"><a id="1drop8-a" href="#">Dropdown 1-8</a></li>
					<li id="1drop9-li"><a id="1drop9-a" href="#">Dropdown 1-9</a></li>
				</ul>
			</li>
	
			<li id="btn1-li"><a id="btn1-a" href="#">Formulare anpassen</a></li>
			<li id="btn2-li"><a id="btn2-a" href="#">Schüler</a></li>
			<li id="btn3-li"><a id="btn3-a" href="#">Anwesenheit</a></li>
			<li id="btn4-li"><a id="btn4-a" href="#">Formulare</a></li>
			<li id="btn5-li"><a id="btn5-a" href="#">Hausaufgaben</a></li>
			<li id="btn6-li"><a id="btn6-a" href="#">Sonstiges</a></li>
			
		</ul>
		<ul class="nav navbar-nav navbar-right">
		
		
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal"></span> <?php echo strtoupper($_SESSION["__user"]); ?> <span class="caret"></span></a>
				<ul id="2drop" class="dropdown-menu">
					<li id="2drop1-l1"><a id="1drop1-a" href="#">Dropdown 2-1</a></li>
					<li id="2drop1-l1"><a id="1drop1-a" href="#">Dropdown 2-1</a></li>
					<li id="2drop1-l1"><a id="1drop1-a" href="#">Dropdown 2-1</a></li>
				</ul>
			</li>
			<li><a href="#logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
	</div>
</nav>


<div id="alertbox">

<div id="success" class="alert alert-success">
  <strong>Success!</strong>
</div>

<div id="info" class="alert alert-info">
  <strong>Info!</strong>
</div>

<div id="warning" class="alert alert-warning">
  <strong>Warning!</strong>
</div>

<div id="danger" class="alert alert-danger">
  <strong>Danger!</strong>
</div>

</div>

<div id="login">
	<form id="login_form" method="post" action="func/login.php">
		<br><input tabindex="1" id="login_username" name="user" placeholder="Name" type="text">
		<br><input tabindex="2" id="login_password" name="pass" placeholder="Passwort" type="password">
		<input tabindex="3" id="login_login" name="login" type="submit" value="Login">
	</form>
</div>

<div id="page" class="container">
  <h1>Willkommen</h1>
  <p>hier k&ouml;nnte ihre Werbung Stehen</p>
</div>

</body>
</html>