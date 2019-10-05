
<?php
include_once("connect_to_mysql.php");
$q = $_GET['q'];

$sqlCommand = "SELECT `tsw_id`, `bain_tsw`, `deta_tsw`, `bab_tsw`, `fasl_tsw`, `band_tsw`, `type_tsw`, `sum_tsw` FROM `datatsw` WHERE tsw_id='$q'"; 
echo  '<table width="1071" height="129" border="1"  bgcolor=""  >
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
                          <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـــــــم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						</table>';
$query = mysqli_query($myConnection , $sqlCommand) or die (mysqli_error());  
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   <table width="1071" height="80" border="1"  bgcolor=""  >

                        <tr>
                         <td  bgcolor="#FFFFFF">'.$row["sum_tsw"].'</td>
                          <td  bgcolor="#FFFFFF"  width="97" align="center"> '.$row["type_tsw"].'</td>
                          <td bgcolor="#FFFFFF"  width="93" align="center">'. $row["band_tsw"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center">'.$row["fasl_tsw"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row["bab_tsw"].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row["deta_tsw"].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row["bain_tsw"].' </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row["tsw_id"].'</td>
                        </tr>
                      </table>';
	
} 
 
?>
<html>
<head>
</head>
<body>

</body>
</html>