
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
AND data.babid =1";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF" width="150" align="center">'.$row["SUM( sum )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">الباب الاول - اجــور وتعــويضات العاملين</span></center></center></td>
                         
                        </tr>
                      </table>
					  <hr/>  <hr/>
					
   ';

}
$query = "SELECT SUM( sum ) , babname
FROM data, bab
WHERE data.babid = bab.babid
AND data.babid =2";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( sum )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">الباب الثاني-  نفقات على السلع والخدمات</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( sum ) , babname
FROM data, bab
WHERE data.babid = bab.babid
AND data.babid =3";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td   bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( sum )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">الباب الثالث - الاعانات والمنح والمنافع الاجتماعية</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( sum ) , babname
FROM data, bab
WHERE data.babid = bab.babid
AND data.babid =4";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( sum )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">الباب الرابع - اكتساب الاصول الغير مالية</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( sum ) , babname
FROM data, bab
WHERE data.babid = bab.babid
AND data.babid =5";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table border="0"  bgcolor="#999999"  >

                        <tr >
                         <td   bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( sum )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">الباب الخامس - اكتساب الاصول المالية وتسديدات الخصوم</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( sum ) 
FROM data
WHERE 1";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF"  width="150" align="center" >'.$row["SUM( sum )"].'</td>
						
						  <td    bgcolor="#CC6600" width="300" ><center>إجمالي الإستخدامات العامة</center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
echo "</select>\n";
	
?>


</body></html>