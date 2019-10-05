<?php 
include "connect_to_mysql.php";
$deptno=$_GET['q'];
 $query ='SELECT  `dept_no`,`dept_name` FROM `dept_table` WHERE `dept_no`='.$deptno.'';

  $result= mysql_query($query);
  
 echo ' <table  border="1" dir="rtl"  cellpadding="0" cellspacing="0" >    <tr><td align="center" bgcolor="#99FFFF"> رقم الأدارة </td>
 <td align="center"bgcolor="#99FFFF" > أسم الأدارة </td>
    </tr>
	 ';
    while($row=mysql_fetch_array($result))
  {   
	 echo '
 
	
    <tr> <td ><input id="dept_no" value="'. $row['dept_no'] .'"    name="set_no2" type="text" size="10" /></td>
  
     <td ><input id="dept_name"  value="'.$row['dept_name'].'"   name="set_name2" type="text" size="10" /></td>
    </tr>
	
	';}echo'</table>';
	
?>