<?php 
require '../inc/session.php';
require '../inc/mysql.php';

$user = "";
$pass = "";
$user = $_POST["user"];
$pass = $_POST["pass"];
$login = false;
$msg = "Fehler <br /> Bitte Administrator benarichtigen";
$arr = array('login' => $login, 'msg' => $msg);
if($user != "" && $pass != ""){
	$sql = "SELECT * FROM user WHERE user LIKE '$user'";
	$e = mysql_query($sql);
	$row = mysql_fetch_object($e);
	if(!$row)
	{
		$login = false;
		$msg = "Falscher Username und/oder Password";
		$arr = array('login' => $login, 'msg' => $msg);
		echo json_encode($arr);
	}else
	{
		if($row->user == $user && $row->pass == md5($pass)) {
			$_SESSION["__id"] = $row->user_id;
			$_SESSION["__user"] = $row->user;
			$_SESSION["__admin"] = $row->admin;
			$_SESSION["__l_id"] = $row->l_id;
				
			$login = true;
			$msg = "<b>$row->user</b><br/> Erfolgreich eingelogt.";
			$arr = array('login' => $login, 'msg' => $msg);
			echo json_encode($arr);
		}else {
			$login = false;
			$msg = "Falscher Username und/oder Password";
			$arr = array('login' => $login, 'msg' => $msg);
			echo json_encode($arr);
		}
	}
	
}else{
	$login = false;
	$msg = "Bitte gegben sie Username oder Password ein.";
	$arr = array('login' => $login, 'msg' => $msg);
	echo json_encode($arr);
}
?>
