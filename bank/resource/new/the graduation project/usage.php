<?php require_once('../Connections/usage.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
$b1=$_GET['b1'];$b2=$_GET['b2'];$b3=$_GET['b3'];$b4=$_GET['b4'];$b5=$_GET['b5'];
  $insertSQL = sprintf("INSERT INTO application_form (app_f_no, app_f_date, app_f_data, app_f_money, app_f_budget) VALUES ($b1, $b2, $b3, $b4, $b5)",
                       GetSQLValueString($_POST['app_f_no'], "int"),
                       GetSQLValueString($_POST['app_f_date'], "date"),
                       GetSQLValueString($_POST['app_f_data'], "text"),
                       GetSQLValueString($_POST['app_f_money'], "int"),
                       GetSQLValueString($_POST['app_f_budget'], "int"));

  mysql_select_db($database_usage, $usage);
  $Result1 = mysql_query($insertSQL, $usage) or die(mysql_error());

  $insertGoTo = "journal.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));

mysql_select_db($database_usage, $usage);
$query_Recordset1 = "SELECT app_f_money FROM application_form";
$Recordset1 = mysql_query($query_Recordset1, $usage) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">App_f_no:</td>
      <td><input type="text" name="app_f_no" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">App_f_date:</td>
      <td><input type="text" name="app_f_date" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">App_f_data:</td>
      <td><input type="text" name="app_f_data" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">App_f_money:</td>
      <td><input type="text" name="app_f_money" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">App_f_budget:</td>
      <td><input type="text" name="app_f_budget" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
