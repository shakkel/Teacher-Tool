<?php
	require '../inc/mysql.php';

    $sql = "SELECT * FROM klassendaten";
    $e = mysql_query($sql);
	
	$encode = array();
	$i = 1;
	
	while($row = mysql_fetch_assoc($e)) {
	   //$encode["Klassen"][$row['k_kuerzel']] = $row['k_bezeichnung'];
	}
	//echo json_encode($encode);
?>

<?php
    $sql = "SELECT * FROM klasse_zeitphase";
	$encode = array();
    $e = mysql_query($sql);
	while($row = mysql_fetch_assoc($e)) {
		$zph_id = $row['zph_id'];
		$k_kuerzel = $row['k_kuerzel'];
		$kz_id = $row['kz_id'];
		
		$sql2 = "SELECT * FROM zeitphase WHERE zph_id = '$zph_id'";
		$e2 = mysql_query($sql2);
		while($row2 = mysql_fetch_assoc($e2)) {
			$zph_bezeichnung = $row2['zph_bezeichnung'];
		}
		
		$sql2 = "SELECT * FROM klassendaten WHERE k_kuerzel = '$k_kuerzel'";
		$e2 = mysql_query($sql2);
		while($row2 = mysql_fetch_assoc($e2)) {
			$k_bezeichnung = $row2['k_bezeichnung'];
		}
		
		$encode["Klassen"][$k_kuerzel]['k_bezeichnung'] = $k_bezeichnung;
		$encode["Klassen"][$k_kuerzel][$kz_id]['zph_bezeichnung'] = $zph_bezeichnung;
		$encode["Klassen"][$k_kuerzel][$kz_id]['zph_id'] = $zph_id;
		
	}

echo json_encode($encode);

?>