<?php
require '../inc/session.php';

$logout = true;
$msg = "<b>".$_SESSION["__user"]."</b><br/>  Erfolgreich ausgelogt.";
$arr = array('logout' => $logout, 'msg' => $msg);
echo json_encode($arr);
session_destroy();
?>