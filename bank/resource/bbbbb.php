
<?php
$i=1;
$user="root";
$host="localhost";
$password="root";
$database = "users";
$connection = mysql_connect($host,$user,$password)
or die ("couldn't connect to server");

$q=$_GET["q"];

	$db = mysql_select_db($database,$connection)


or die ("Couldn't select database");
$query = "SELECT DISTINCT  `fsid` FROM `fsw` WHERE babid =$q ";
$result = mysql_query($query)
or die ("Couldn't execute query.");

echo "
<b id='babnum'>$q</b>
<select name='petType'  onchange='showRSSpand(this.value)'>\n";
echo "<option value=".'0'.">" .'اختــر نوع الفصـل'. "</option>";

while ($row = mysql_fetch_array($result))
{

 echo "<option  value=".$i.">". $row['fsid'].  "</option>";
 $i++;
}
echo "</select>\n";
	
?>
