<?php
require '../inc/mysql.php';
require '../inc/session.php';

$Klasse = $_GET["Klasse"];
$kz_id = $_GET["kz_id"];
echo "<h1>$Klasse</h1>";

echo '<script type="text/javascript">$(document).ready(function() {setTimeout(function(){ loadNotizen("klasse_zeitphase",'.$_SESSION["__l_id"].'); }, 100);});</script>';

?>

<div id="Info_kl"><h1> INFO </h1>
	<?php
		$lid = $_SESSION['__l_id'];
		echo "<div id='Notizen-klasse_zeitphase-$kz_id' data-typ='Notizen-klasse_zeitphase-$kz_id' >Infos....</div>"; 
	?>
	<button class='btn edit'>Edit</button>
</div> 
	 
		
	 
<?php
$sql="SELECT * FROM klasse_zeitphase inner join schueler_klasse_zph on klasse_zeitphase.kz_id = schueler_klasse_zph.kz_id inner join schuelerdaten on schueler_klasse_zph.s_id = schuelerdaten.s_id WHERE klasse_zeitphase.kz_id LIKE '".$kz_id."'";
$result = mysql_query($sql);
while($row = mysql_fetch_object($result))
{#
	echo "<div id='img'><img src='img/schueler/".$row->s_id.".png' alt=Kein_Bild' id='img-src' /><div id='img-text'>".$row->s_vname." ".$row->s_nname."</div></div>";
}
?>
