<?php
include('connect.php');
$pur_id=$_POST["pur_id"];
$item_id=$_POST["item_id"];
$vendor_id=$_POST["vendor_id"];
$cust_id=$_POST["cust_id"];
$pur_date=$_POST["pur_date"];
if($pur_id != "" && $item_id != "" && $vendor_id != "" && $cust_id != ""  && $pur_date != "")
{
$sql="insert into purchase values('$pur_id','$item_id','$vendor_id','$cust_id','$pur_date')";
mysql_query($sql);
echo " Purchase Detatils added";
}
else
{
 echo "one of the field is empty";
}
?>


