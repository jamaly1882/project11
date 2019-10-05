<?php include_once('conecxxxt.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION <6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
 
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO bab (babid, babname) VALUES (%s, %s)",
                       GetSQLValueString($_POST['babid'], "int"),
                       GetSQLValueString($_POST['babname'], "int"));

  mysql_select_db($database_conect, $conect);
  $Result1 = mysql_query($insertSQL, $conect) or die(mysql_error());
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="200607060814031.jpg" >
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="right" dir="rtl">
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#F0F0F0">الرقم</td>
      <td><input type="text" name="stmarh" value=" " size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">الاسم</td>
      <td><input type="text" name="tswee" value=" " size="32" /></td>
   </tr>
   <tr>
    <td bgcolor="#00DFAA"><input name="Submit" type="submit" class="style21" value="اضـــــــــــــــــــافة" /></td>
    </tr>
  </table>
 <input type="hidden" name="MM_insert" value="form1" />
</form>
<?php
$conect = mysql_pconnect($hostname_conect, $username_conect, $password_conect) or trigger_error(mysql_error(),E_USER_ERROR);
$dbresulte = mysql_db_query ("users" , "SELECT * FROM bab WHERE 1 ");
echo"<table border=1 cellpadding=0 cellspacing=0 width=50%>";
echo"<td width=5% align= center bgcolor= #00FFFF>الرقم</td>";
echo"<td width=5% align= center bgcolor= #00FFFF> الاسم</td>";

while($row =mysql_fetch_array($dbresulte))
{
echo"<tr>";	

echo"<table border=1 cellpadding=0 cellspacing=0 width=50%>";
echo"<td width=5% align= center bgcolor= #00FFFF>$row[babid]</td>";
echo"<td width=5% align= center bgcolor= #00FFFF>$row[babname]</td>";
	
	}
	echo"</table>";
?>
</body>
</html>
<?php
//mysql_free_result($googel);
?>
