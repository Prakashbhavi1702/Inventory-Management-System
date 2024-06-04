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
<title>item delete</title>
</head>
<body>
<form action="delete.php" method="post">
<table align="center">
<tr>
<td>item id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="item_id" value=""></td>
</tr>
<tr>
<td align="right"><input type="submit" value="delete"></td>
</tr>
</table>
</form>
<?php
include('connect.php');
$item_id=$_POST["item_id"];
if($item_id != "")
{
$sql="delete from item where item_id=$item_id";
mysql_query($sql);
echo "item deleted";
//echo $item_id;
}
else
{
 echo "Please enter item details";
}
?>

