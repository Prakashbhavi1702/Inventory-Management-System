<html>
<head>
<style>
        body{
            background-image:url('background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Item Update</title>
</head>
<body>
<form action="update1.php" method="post">
<table align="center">
<tr>
<td>item model &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="item_model" value=""></td>
</tr>
<tr>
<td>Launched Year(yyyy-mm-dd) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="lau_year" value=""></td>
</tr>
<tr>
<td>item Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="item_price" value=""></td>
</tr>
<tr>
<td align="right"><input type="submit" value="update"></td>
</tr>
</table>
</form>
<?php
session_start();
include('connect.php');
//echo $_SESSION['id'];
$item_id=$_SESSION['id'];
//$item_name=$_SESSION['item_name'];
$item_model=$_POST["item_model"];
$lau_year=$_POST["lau_year"];
$item_price=$_POST["item_price"];
if($item_model != "" && $lau_year != "" && $item_price != "" )
{
$sql="update item set item_model='$item_model',item_price='$item_price',lau_year='$lau_year' where item_id=$item_id";
mysql_query($sql);
echo "Detatils updated";
//echo $item_id;
}
else
{
 echo "one of the field is empty";
}
?>

