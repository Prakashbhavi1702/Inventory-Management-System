<?php
session_start();
include('connect.php');
$item_id=$_POST["item_id"];
$_SESSION['id']=$item_id;
echo $_SESSION['id'];
?>
<script type="text/javascript">
alert ("session set");
document.location="update1.php ";
</script>

