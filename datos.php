<?php require_once('Connections/sitio.php'); ?>
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO datos (Nombre, Edad, Direccion, Telefono, Fecha, Opinion) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Edad'], "text"),
                       GetSQLValueString($_POST['Direccion'], "text"),
                       GetSQLValueString($_POST['Telefono'], "text"),
                       GetSQLValueString($_POST['Fecha'], "text"),
                       GetSQLValueString($_POST['Opinion'], "text"));

  mysql_select_db($database_sitio, $sitio);
  $Result1 = mysql_query($insertSQL, $sitio) or die(mysql_error());
}

$maxRows_Recordset2 = 10;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database_sitio, $sitio);
$query_Recordset2 = "SELECT * FROM datos";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $sitio) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datos</title>
</head>

<body background="images.jfif" text="#FFFFFF" vlink="#D6D6D6">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td width="61" align="right" nowrap="nowrap">Nombre:</td>
      <td width="245"><input type="text" name="Nombre" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Edad:</td>
      <td><input type="text" name="Edad" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Direccion:</td>
      <td><input type="text" name="Direccion" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td><input type="text" name="Telefono" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fecha:</td>
      <td><input type="text" name="Fecha" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Opinion:</td>
      <td><input type="text" name="Opinion" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td height="173" align="right" nowrap="nowrap">&nbsp;</td>
      <td style="text-align: center; font-weight: bold; color: #D6D6D6;"><input type="submit" value="Insertar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="1">
  <tr>
    <td>Nombre</td>
    <td>Edad</td>
    <td>Direccion</td>
    <td>Telefono</td>
    <td>Fecha</td>
    <td>Opinion</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset2['Nombre']; ?></td>
      <td><?php echo $row_Recordset2['Edad']; ?></td>
      <td><?php echo $row_Recordset2['Direccion']; ?></td>
      <td><?php echo $row_Recordset2['Telefono']; ?></td>
      <td><?php echo $row_Recordset2['Fecha']; ?></td>
      <td><?php echo $row_Recordset2['Opinion']; ?></td>
    </tr>
    <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
