<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Item Details</title>
</head>
<body>
<h1 align="center">AVALIABLE ITEM INFORMATION</h1>
<table align="center">
<tr>
<th>item_id</th>
<th>item_name</th>
<th>item_model</th>
<th>lau_year</th>
<th>item_price</th>
</tr>
<?php
include('connect.php');
$sql="Select *from ITEM";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
?>
<tr>
<td align="center"><?php echo $row['item_id'];?></td>
<td align="center"><?php echo $row['item_name'];?></td>
<td align="center"><?php echo $row['item_model'];?></td>
<td align="center"><?php echo $row['lau_year'];?></td>
<td align="center"><?php echo $row['item_price'];?></td>
<?php
}
?>
</table>
</body>
</html>

