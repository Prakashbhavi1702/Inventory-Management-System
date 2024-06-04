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
<title>ITEM Details</title>
</head>
<body>
    <hr>
<h1 align="center">item INFORMATION</h1>
<hr>
<form action="search1.php" method="post">
<table align="center">
<tr>
<td>Item ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="item_id" value=""></td>
</tr>
<tr>
<td align="right"><input type="submit" value="Search"></td>
</tr>
</table>
</form>
<?php
include('connect.php');
$item_id=$_POST["item_id"];
$sql="Select *from item where item_id=$item_id";
$res=mysql_query($sql);
?>
<table  border="1" align="center">
<tr>
<th>item Id</th>
<th>item name</th>
<th>item Model</th>
<th>Launched Year</th>
<th>item Price </th>
</tr>
<?php
while($row=mysql_fetch_array($res)){?>
<tr>
<td align="center"><?php echo $row['item_id'];?></td>
<td align="center"><?php echo $row['item_name'];?></td>
<td align="center"><?php echo $row['item_model'];?></td>
<td align="center"><?php echo $row['lau_year'];?></td>
<td align="center"><?php echo $row['item_price'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

