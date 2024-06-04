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
<title>ITEM Register Page</title>
</head>

<!--Register ITEM details-->
<body>
<u><h1 align="center">Register Item</h1></u>
<form action="insert_item.php" method="post">
<table align="center">
<tr>
<td>Item ID </td>
<td><input type="text" name="item_id" value=""></td>
</tr>
<tr>
<td>Item name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="item_name" value=""></td>
</tr>
<tr>
<td>Item Model &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="item_model" value=""></td>
</tr>
<tr>
<td>Launched Year(yyyy-mm-dd) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="lau_year" value=""></td>
</tr>
<tr>
<td>Item Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="item_price" value=""></td>
</tr>
<tr>
    <td align="left"><input type="submit" value="register"></td>
</tr>
</table>
</form>




<!-- Register customer details-->

<U><h1 align="center">Register Customer Details</h1></U>
<form action="insert_cust.php" method="post">
<table align="center">
<tr>
<td>Customer ID </td>
<td><input type="text" name="cust_id" value=""></td>
</tr>
<tr>
<td>Customer name </td>
<td><input type="text" name="cust_name" value=""></td>
</tr>
<tr>
<td>Customer Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="cust_address" value=""></td>
</tr>
<tr>
<td>Customer Phonenumber &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="cust_phno" value=""></td>
</tr>
<tr>
<td align="left"><input type="submit" value="register"></td>
</tr>
</table>
</form>



<!-- Register Vendor details-->

<U><h1 align="center">Register vendor Details</h1></U>
<form action="insert_vendor.php" method="post">
<table align="center">
<tr>
<td>vendor ID </td>
<td><input type="text" name="vendor_id" value=""></td>
</tr>
<tr>
<td>Item id </td>
<td><input type="text" name="item_id" value=""></td>
</tr>
<tr>
<td>vendor name </td>
<td><input type="text" name="vendor_name" value=""></td>
</tr>
<tr>
<td align="left"><input type="submit" value="register"></td>
</tr>
</table>
</form>
</body>
</html>

