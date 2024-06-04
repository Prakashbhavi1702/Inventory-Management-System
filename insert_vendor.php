<?php
include('connect.php');
$vendor_id=$_POST["vendor_id"];
$item_id=$_POST["item_id"];
$vendor_name=$_POST["vendor_name"];
if($vendor_id != "" && $item_id != "" && $vendor_name!="")
{
$sql="insert into vendor values($vendor_id,$item_id,'$vendor_name')";
mysql_query($sql);
echo "Vendor Detatils added";
}
else
{
 echo "one of the field is empty";
}
?>


