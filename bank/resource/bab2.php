
<?php
$i=1;
$user="root";
$host="localhost";
$password="root";
$database = "users";
$connection = mysql_connect($host,$user,$password)
or die ("couldn't connect to server");

$q=$_GET['q'] ;

	$db = mysql_select_db($database,$connection)


or die ("Couldn't select database");
$query = "SELECT SUM( sum ) , babname
FROM data, bab
WHERE data.babid = bab.babid
AND data.babid =$q";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table width="100" height="80" border="0"  bgcolor="#999999"  >

                        <tr >
                         <td   bgcolor="#00CCCC">'.$row["SUM( sum )"].'</td>
						 <td   bgcolor="#00CCCC" >'.$row["babname"].'</td>
                         
                        </tr>
                      </table>
   ';

}
echo "</select>\n";
	
?>
</body></html>