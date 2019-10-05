<?php
$i=1;
$user="root";
$host="localhost";
$password="root";
$database = "users";
$connection = mysql_connect($host,$user,$password)
or die ("couldn't connect to server");
$q=$_GET['q'];

//$dat= $d["wday"]."-".$d['mon']."-".$d['year'];
$dat=date('Y-m-d');
echo $dat;

	$db = mysql_select_db($database,$connection)


or die ("Couldn't select database");
$query = "SELECT `Num_tsw`, `Baian_text`, `Date_tsw`, `Bab_rs`, `Fasl_rs`, `Band_rs`, `Type_rs`, `Sum_rs` FROM `data_resurs` WHERE Date_tsw='$dat'";
echo '<table width="1071" height="129" border="1"  bgcolor=""  >
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
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
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

}
echo "</select>\n";
	
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
$dat=  date('Y-m-d')  ;
  echo $dat;

	$db = mysql_select_db($database,$connection)


or die ("Couldn't select database");
$query = "SELECT SUM( Sum_rs ) FROM data_resurs
WHERE Date_tsw='$dat'";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
						<td  bgcolor="#FFFFFF" width="150" align="center">'.$row["SUM( Sum_rs )"].'</td>
						 <td  align="center" bgcolor="#FFFFFF" width="300" height="50"><center><span style="COLOR: #800000; font-family:Arabic Transparent">اجمالي الاستمارات المحصلة في هذا اليوم</span></center></center></td><hr/>
                         
						
						 <hr/>
                         
                        </tr>
                      </table>
   ';

}
echo "</select>\n";
	
?>
</body></html>