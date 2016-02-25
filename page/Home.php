<?php
	require '../inc/session.php';
	
	
	echo '<script type="text/javascript">$(document).ready(function() {setTimeout(function(){ loadNotizen("lehrer",'.$_SESSION["__l_id"].'); }, 100);});</script>';
?>

<table style="width:100%">
  <tr>
	<th>Uhrzeit</th>
    <th>Montag</th>
    <th>Dienstag</th>		
    <th>Mittwoch</th>
	<th>Donnerstag</th>
	<th>Freitag</th>
  </tr>
  <tr>
	<th>8:00 - 8:45</th>
    <td id="1-1" ></td>
    <td id="2-1" ></td>		
    <td id="3-1" ></td>
	<td id="4-1" ></td>		
    <td id="5-1" ></td>
  </tr>
  <tr>
	<th>8:45 - 9:30</th>
    <td id="1-2" ></td>
    <td id="2-2" ></td>		
    <td id="3-2" ></td>
	<td id="4-2" ></td>		
    <td id="5-2" ></td>
  </tr>
  <tr>
	<th>9:50 - 10:35</th>
    <td id="1-3" ></td>
    <td id="2-3" ></td>		
    <td id="3-3" ></td>
	<td id="4-3" ></td>		
    <td id="5-3" ></td>
  </tr>
  <tr>
	<th>10:35 - 11:20</th>
    <td id="1-4" ></td>
    <td id="2-4" ></td>		
    <td id="3-4" ></td>
	<td id="4-4" ></td>		
    <td id="5-4" ></td>
  </tr>
  <tr>
	<th>11:40 - 12:25</th>
    <td id="1-5" ></td>
    <td id="2-5" ></td>		
    <td id="3-5" ></td>
	<td id="4-5" ></td>		
    <td id="5-5" ></td>
  </tr>
  <tr>
	<th>12:25 - 13:10</th>
    <td id="1-6" ></td>
    <td id="2-6" ></td>		
    <td id="3-6" ></td>
	<td id="4-6" ></td>		
    <td id="5-6" ></td>
  </tr>
  <tr>
	<th>13:35 - 14:20</th>
    <td id="1-7" ></td>
    <td id="2-7" ></td>		
    <td id="3-7" ></td>
	<td id="4-7" ></td>		
    <td id="5-7" ></td>
  </tr>
  <tr>
	<th>14:20 - 15:05</th>
    <td id="1-8" ></td>
    <td id="2-8" ></td>		
    <td id="3-8" ></td>
	<td id="4-8" ></td>		
    <td id="5-8" ></td>
  </tr>
  <tr>
	<th>15:20 - 16:05</th>
    <td id="1-9" ></td>
    <td id="2-9" ></td>		
    <td id="3-9" ></td>
	<td id="4-9" ></td>		
    <td id="5-9" ></td>
  </tr>
  <tr>
	<th>16:05 - 16:50</th>
    <td id="1-10" ></td>
    <td id="2-10" ></td>		
    <td id="3-10" ></td>
	<td id="4-10" ></td>		
    <td id="5-10" ></td>
  </tr>
</table>



<div id="Info"><h1> INFO </h1>
	<?php
		$lid = $_SESSION['__l_id'];
		echo "<div id='Notizen-lehrer-$lid' data-typ='Notizen-lehrer-$lid' >Infos....</div>"; 
	?>
	<button class='btn edit'>Edit</button>
</div> 

