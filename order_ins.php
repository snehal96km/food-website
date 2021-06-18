<?php
$myQty=$_POST['myQty'];
$myName=$_POST['myName'];
$myAdd=$_POST['myAdd'];
$myPhone=$_POST['myPhone'];
$dish=$_POST['dish'];
include("connection.php");

$s="insert into orders_tb values('','$myQty','$myName','$myAdd','$myPhone','$dish')";
//echo $s;
$sql=$mysql->prepare($s);
$sql->execute();
echo "<script>alert('Order Confirmed Successfully!!!');</script>";
echo "<script>window.location.href='menu.php'</script>";

?>