<?php
	require '../inc/mysql.php';
	$l_id = $_GET["l_id"];
	
    $sql = "SELECT * FROM lehrer_faecher WHERE l_id = '$l_id'";
	$encode = array();
    $e = mysql_query($sql);
	while($row = mysql_fetch_assoc($e)) {
		$lf_id = $row['lf_id'];
		$f_kuerzel = $row['f_kuerzel'];
		
		
		$sql3 = "SELECT * FROM fachdaten WHERE f_kuerzel = '$f_kuerzel'";
		$e3 = mysql_query($sql3);
		while($row3 = mysql_fetch_assoc($e3)) {
			$f_name = $row3['f_name'];
		}
		
		$sql2 = "SELECT * FROM unterricht WHERE lf_id = '$lf_id'";
		$e2 = mysql_query($sql2);
		while($row2 = mysql_fetch_assoc($e2)) {
			$u_id = $row2['u_id'];
			$kz_id = $row2['kz_id'];
			$r_kuerzel = $row2['r_kuerzel'];
			$u_tag = $row2['u_tag'];
			$u_stunde = $row2['u_stunde'];
			$u_doppelstunde = $row2['u_doppelstunde'];
			
			$encode[$f_kuerzel]["f_name"] = $f_name;
			$encode[$f_kuerzel]["Item"][$u_id]["kz_id"] = $kz_id;
			$encode[$f_kuerzel]["Item"][$u_id]["r_kuerzel"] = $r_kuerzel;
			$encode[$f_kuerzel]["Item"][$u_id]["u_tag"] = $u_tag;
			$encode[$f_kuerzel]["Item"][$u_id]["u_stunde"] = $u_stunde;
			$encode[$f_kuerzel]["Item"][$u_id]["u_doppelstunde"] = $u_doppelstunde;
		}
		
		//$encode["Klassen"][$k_kuerzel]['k_bezeichnung'] = $k_bezeichnung;
		//$encode["Klassen"][$k_kuerzel][$kz_id]['zph_bezeichnung'] = $zph_bezeichnung;
		//$encode["Klassen"][$k_kuerzel][$kz_id]['zph_id'] = $zph_id;
		
	}

echo json_encode($encode);

?>