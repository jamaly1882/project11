<?php
include_once("connect_to_mysql.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q = $_GET['q'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "../scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT * FROM `data_resurs` WHERE Bab_rs='$q'"; 
echo  '<table width="100%" height="129" border="1" align="center"  bgcolor=""  >
                        <tr>
                        <td width="263" height="52" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">القيمة</font></span></center></td>
                          <td width="97" height="52" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4">النوع</font></span>
                          </center></td>
                          <td width="93" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البند</font></span></center></td>
                          <td width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4">الفصل</font></span>
                          </center></td>
                          <td width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> الباب</font></span>
                          </center></td>
                          <td width="142" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td colspan="2" align="right" bgcolor="#99FFFF"><center>
                          <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـــــــم الاستمارة</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						</table>';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error()); 
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   <table width="100%"  align="center" height="80" border="1"  bgcolor=""  >

                       <tr>
                         <td  bgcolor="#FFFFFF">'.$row["Sum_rs"].'</td>
                          <td  bgcolor="#FFFFFF"  width="80" align="center"> '.$row["Type_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center">'. $row["Band_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center">'.$row["Fasl_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row["Bab_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row["Date_tsw"].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row["Baian_text"].' </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row["Num_tsw"].'</td>
                        </tr>
                      </table>
   ';
	//$pagebody = str_replace("<br />", "", $pagebody);
} 
//mysqli_free_result($query); 
?>
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
$query = "SELECT SUM( Sum_rs ) , Name_bab
FROM data_resurs, bab_res
WHERE data_resurs.Bab_rs = bab_res.Num_babid
AND data_resurs.Bab_rs  =$q";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
						<td  bgcolor="#FFFFFF" width="150" align="center">'.$row["SUM( Sum_rs )"].'</td>
						 <td  align="center" bgcolor="#FFFFFF" width="300" height="50"><center><span style="COLOR: #800000; font-family:Arabic Transparent">'.$row["Name_bab"].'</span></center></center></td><hr/>
                         
						
						 <hr/>
                         
                        </tr>
                      </table>
   ';

}
echo "</select>\n";
	
?>

</body></html>