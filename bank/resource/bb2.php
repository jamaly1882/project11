
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
$query = "SELECT DISTINCT  `bndid`FROM `band` WHERE fsid=$w && babid=$p";
$result = mysql_query($query)
or die ("Couldn't execute query.");

echo "
<b id='fsnum'>$p$w</b>
<select name='petType' onchange='show(this.value)'>\n";
 echo "<option value=".'0'.">" .'اختــر نوع البند'. "</option>";

while ($row = mysql_fetch_array($result))
{

 echo "<option value=".$i.">". $row['bndid'].  "</option>";
$i++;
}
echo "</select>\n";
	
?>
</body></html>