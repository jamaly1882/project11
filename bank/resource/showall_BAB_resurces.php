
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
AND data_resurs.Bab_rs  =1";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF" width="150" align="center">'.$row["SUM( Sum_rs )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">'.$row["Name_bab"].'</span></center></center></td>
                         
                        </tr>
                      </table>
					  <hr/>  <hr/>
					
   ';

}
$query = "SELECT SUM( Sum_rs ) , Name_bab
FROM data_resurs, bab_res
WHERE data_resurs.Bab_rs = bab_res.Num_babid
AND data_resurs.Bab_rs  =2";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( Sum_rs )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">'.$row["Name_bab"].'</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( Sum_rs ) , Name_bab
FROM data_resurs, bab_res
WHERE data_resurs.Bab_rs = bab_res.Num_babid
AND data_resurs.Bab_rs  =3";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td   bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( Sum_rs )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">'.$row["Name_bab"].'</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( Sum_rs ) , Name_bab
FROM data_resurs, bab_res
WHERE data_resurs.Bab_rs = bab_res.Num_babid
AND data_resurs.Bab_rs  =4";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( Sum_rs )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">'.$row["Name_bab"].'</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( Sum_rs ) , Name_bab
FROM data_resurs, bab_res
WHERE data_resurs.Bab_rs = bab_res.Num_babid
AND data_resurs.Bab_rs  =5";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table border="0"  bgcolor="#999999"  >

                        <tr >
                         <td   bgcolor="#FFFFFF"  width="150" align="center">'.$row["SUM( Sum_rs )"].'</td>
						
						  <td width="300" align="center"  bgcolor="#FFFFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent">'.$row["Name_bab"].'</span></center></center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
$query = "SELECT SUM( Sum_rs ) 
FROM data_resurs
WHERE 1";
$result = mysql_query($query)
or die ("Couldn't execute query.");

//echo"$result";

while ($row = mysql_fetch_array($result))
{
 echo'  
   <table  border="0"  bgcolor="#999999"  >

                        <tr >
                         <td    bgcolor="#FFFFFF"  width="150" align="center" >'.$row["SUM( Sum_rs )"].'</td>
						
						  <td    bgcolor="#CC6600" width="300" ><center>إجمالي المــــوارد العامة</center></td>
                         
                        </tr>
                      </table>  <hr/>  <hr/>
   ';

}
echo "</select>\n";
	
?>


</body></html>