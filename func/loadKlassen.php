<?php
	require '../inc/mysql.php';

    $sql = "SELECT * FROM klassendaten";
    $e = mysql_query($sql);
	
	$encode = array();
	$i = 1;
	
	while($row = mysql_fetch_assoc($e)) {
	   $encode["Klassen"][$row['k_kuerzel']] = $row['k_bezeichnung'];
	   $i++;
	}

	print_r($encode);
	echo json_encode($encode);
?>
