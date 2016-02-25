<?php
require '../inc/mysql.php';

$Klasse = $_GET["Klasse"];
$kz_id = $_GET["kz_id"];
echo "<h1>$Klasse</h1>";


echo "<input type='date' value='".date("Y-m-d")."'/>";
?>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Stunde
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#Anwesenheit/MKP2A/3274/1/">1. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/2/">2. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/3/">3. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/4/">4. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/5/">5. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/6/">6. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/7/">7. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/8/">8. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/9/">9. Stunde</a></li>
	<li><a href="#Anwesenheit/MKP2A/3274/10/">10. Stunde</a></li>
  </ul>
</div>

<table style="width:80%;">
	<tr>
		<th>Nachname</th>
		<th>Vorname</th>
		<th>Da</th>
		<th>Nicht Da</th>
		<th>Entschuldigt</th>
		<th>Verspätung</th>
		<th>Abmeldung</th>
		<th>Wann?</th>
	</tr>
<?php
$sql="SELECT * FROM klasse_zeitphase inner join schueler_klasse_zph on klasse_zeitphase.kz_id = schueler_klasse_zph.kz_id inner join schuelerdaten on schueler_klasse_zph.s_id = schuelerdaten.s_id WHERE klasse_zeitphase.kz_id LIKE '".$kz_id."'";
$result = mysql_query($sql);
$id = 1;
while($row = mysql_fetch_object($result))
{
	if($id==1){
		echo "<tr style='background-color:gray;'><td>".$row->s_nname."</td><td>".$row->s_vname."</td>
		<td><input type='radio' checked name='anwesenheit-".$row->s_id."' value='da'><br></td>
		<td><input type='radio' name='anwesenheit-".$row->s_id."' value='nicht'><br></td>
		<td><input type='checkbox' name='anwesenheit-".$row->s_id."' value='ent'><br></td>
		<td><input style='width: 60px;' step='5' type='number' name='anwesenheit-".$row->s_id."' min='0' value='0'>Min<br></td>
		<td><input type='checkbox' name='anwesenheit-".$row->s_id."' value='ent'><br></td>
		<td><input style='width: 60px;' step='5' type='number' name='anwesenheit-".$row->s_id."' min='0' value='0'>Min vor Ende<br></td>
		</td></tr>";
		$id++;
	}else{
		echo "<tr style='background-color:lightgray;'><td>".$row->s_nname."</td><td>".$row->s_vname."</td>
		<td><input type='radio' checked name='anwesenheit-".$row->s_id."' value='da'><br></td>
		<td><input type='radio' name='anwesenheit-".$row->s_id."' value='nicht'><br></td>
		<td><input type='checkbox' name='anwesenheit-".$row->s_id."' value='ent'><br></td>
		<td><input style='width: 60px;' step='5' type='number' name='anwesenheit-".$row->s_id."' min='0' value='0'>Min<br></td>
		<td><input type='checkbox' name='anwesenheit-".$row->s_id."' value='ent'><br></td>
		<td><input style='width: 60px;' step='5' type='number' name='anwesenheit-".$row->s_id."' min='0' value='0'>Min vor Ende<br></td>
		</td></tr>";
		$id--;
	}
}
?>

</table>