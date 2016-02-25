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
	echo '<script type="text/javascript">$(document).ready(function() {hidelogin()});</script>';
	
	echo '<script type="text/javascript">$(document).ready(function() {loadKlassen();setTimeout(function(){ loadUnterricht('.$_SESSION["__l_id"].'); }, 100);});</script>';
	
	echo '<div style="display: none;" id="l_id">'.$_SESSION["__l_id"].'</div>';
}
?>

<nav id="navbar" class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#home">Teacher Tool</a>
		</div>
		<ul class="nav navbar-nav">
			<li id="klassen" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Klassen<span class="caret"></span></a>
				<ul id="1drop" class="dropdown-menu">
				</ul>
			</li>
			<li id="btn-schueler-li"><a id="btn-schueler-a" href="#">Schüler</a></li>
			<li id="btn-anwesenheit-li"><a id="btn-anwesenheit-a" href="#">Anwesenheit</a></li>
			<li id="btn-formulare-li"><a id="btn-formulare-a" href="#">Formulare</a></li>
			<li id="btn-hausaufgaben-li"><a id="btn-hausaufgaben-a" href="#">Hausaufgaben</a></li>
			<li id="btn-sonstieges-li"><a id="btn-sonstieges-a" href="#">Sonstiges</a></li>
			<li id="btn-raumverwaltung-li"><a id="btn-raumverwaltung-a" href="#">Raumverwaltung</a></li>
			<li id="btn-lehrerfach-li"><a id="btn-lehrerfach-a" href="#">Lehrer Fächer</a></li>
			<li id="btn-stundenplanverwaltung-li"><a id="btn-stundenplanverwaltung-a" href="#">Stundenplanverwaltung</a></li>
			
		</ul>
		<ul class="nav navbar-nav navbar-right">
		
		
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-horizontal"></span> <?php echo strtoupper($_SESSION["__user"] ."(".$_SESSION["__l_id"].")"); ?> <span class="caret"></span></a>
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
</div>

</body>
</html>