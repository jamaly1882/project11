
<?php
$i=1;
$user="root";
$host="localhost";
$password="root";
$database = "users";
$connection = mysql_connect($host,$user,$password)
or die ("couldn't connect to server");

$e=$_GET["e"];
$pf=$_GET["pf"];

$p=substr($pf,0,1);
$f=substr($pf,1);

//find out which feed was selected
//echo "$q";
	$db = mysql_select_db($database,$connection)


or die ("Couldn't select database");
$query = "SELECT DISTINCT  `typid`FROM `type` WHERE fsid=$f And babid=$p And bndid=$e";
$result = mysql_query($query)
or die ("Couldn't execute query.");

echo "

<select name='petType' onchange='showend(this.value)'>\n";
echo "<option value=".'0'.">" .'اختــر النوع المطلوب'. "</option>";

while ($row = mysql_fetch_array($result))
{

 echo "<option value=".$i.">". $row['typid'].  "</option>";
$i++;
}
echo "</select>\n";
	
?>
</body></html>
