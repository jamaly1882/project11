
<?php
$i=1;
$user="root";
$host="localhost";
$password="root";
$database = "users";
$connection = mysql_connect($host,$user,$password)
or die ("couldn't connect to server");

$w=$_GET["w"];
$p=$_GET["p"];

//find out which feed was selected
//echo "$q";
	$db = mysql_select_db($database,$connection)


or die ("Couldn't select database");
$query = "SELECT DISTINCT  `Num_bandid`FROM `band_res` WHERE Num_faslid=$w AND Num_babid=$p";
$result = mysql_query($query)
or die ("Couldn't execute query.");

echo "
<b id='fsnumres'>$p$w</b>
<select name='petType' onchange='showrestype(this.value)'>\n";
 echo "<option value=".'0'.">" .'اختــر نوع البند'. "</option>";

while ($row = mysql_fetch_array($result))
{

 echo "<option value=".$i.">". $row['Num_bandid'].  "</option>";
$i++;
}
echo "</select>\n";
	
?>
</body></html>