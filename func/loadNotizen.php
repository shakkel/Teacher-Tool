<?php
	require '../inc/mysql.php';
	$l_id = $_GET["l_id"];
	$typ = $_GET["typ"];
	
    $sql = "SELECT * FROM notizen WHERE l_id = '$l_id' AND no_typ like '$typ'";
	$encode = array();
    $e = mysql_query($sql);
	while($row = mysql_fetch_assoc($e)) {
		$no_fremd_id = $row['no_fremd_id'];
		$no_text = $row['no_text'];
		
		$encode["no_fremd_id"] = $no_fremd_id;
		$encode["no_text"] = $no_text;
		
	}

echo json_encode($encode);

?>