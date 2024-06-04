<?php
include('connect.php');
$item_id=$_POST["item_id"];
$item_name=$_POST["item_name"];
$item_model=$_POST["item_model"];
$lau_year=$_POST["lau_year"];
$item_price=$_POST["item_price"];
if($item_id != "" && $item_name != "" && $item_model != "" && $lau_year != "" && $item_price != "" )
{
$sql="insert into item values('$item_id','$item_name','$item_model','$lau_year','$item_price')";
mysql_query($sql);
echo "Detatils added";
}
else
{
 echo "one of the field is empty";
}
?>


