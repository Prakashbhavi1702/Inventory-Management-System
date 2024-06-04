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
<title>Purhase Details</title>
</head>
<body>
    <hr>
<h1 align="center">PURCHASE INFORMATION</h1>
<hr>
<form action="Purchase details1.php" method="post">
<table align="center">
<tr>
<td>Purchase ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pur_id" value=""></td>
</tr>
<tr>
<td align="right"><input type="submit" value="Search"></td>
</tr>
</table>
</form>
<?php
include('connect.php');
$pur_id=$_POST["pur_id"];
$sql="Select *from purchase where pur_id=$pur_id";
$res=mysql_query($sql);
?>
<table  border="1" align="center">
<tr>
<th>pur id</th>
<th>item id</th>
<th>vendor id</th>
<th>cust id</th>
<th>pur date</th>
</tr>
<?php
while($row=mysql_fetch_array($res)){?>
<tr>
<td align="center"><?php echo $row['pur_id'];?></td>
<td align="center"><?php echo $row['item_id'];?></td>
<td align="center"><?php echo $row['vendor_id'];?></td>
<td align="center"><?php echo $row['cust_id'];?></td>
<td align="center"><?php echo $row['pur_date'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

