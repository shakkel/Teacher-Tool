<?php
require '../inc/mysql.php';

$Klasse = $_GET["Klasse"];
$kz_id = $_GET["kz_id"];
echo "<h1>$Klasse</h1>"

?>
<table style="width:80%;">
	<tr>
		<th>Nachname</th>
		<th>Vorname</th>
	</tr>
<?php
$sql="SELECT * FROM klasse_zeitphase inner join schueler_klasse_zph on klasse_zeitphase.kz_id = schueler_klasse_zph.kz_id inner join schuelerdaten on schueler_klasse_zph.s_id = schuelerdaten.s_id WHERE klasse_zeitphase.kz_id LIKE '".$kz_id."'";
$result = mysql_query($sql);
$id = 1;
while($row = mysql_fetch_object($result))
{
	if($id==1){
		echo "<tr style='background-color:gray;'><td>".$row->s_nname."</td><td>".$row->s_vname."</td></tr>";
		$id++;
	}else{
		echo "<tr style='background-color:lightgray;'><td>".$row->s_nname."</td><td>".$row->s_vname."</td></tr>";
		$id--;
	}
}
?>

</table>