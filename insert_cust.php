<?php
include('connect.php');
$cust_id=$_POST["cust_id"];
$cust_name=$_POST["cust_name"];
$cust_address=$_POST["cust_address"];
$cust_phno=$_POST["cust_phno"];
if($cust_id != "" && $cust_name != "" && $cust_address != "" && $cust_phno != "" )
{
$sql="insert into customer values($cust_id,'$cust_name','$cust_address','$cust_phno')";
mysql_query($sql);
echo "Detatils added";
}
else
{
 echo "one of the field is empty";
}
?>


