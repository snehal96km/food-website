<?php
$uname=$_POST['uname'];
$upass=$_POST['upass'];
include("connection.php");

$sql=$mysql->prepare("select * from userlogin_tb where un='$uname' and pass='$upass'");
$sql->execute();
if($sql->rowCount()>0)
{
	echo "<script>alert('Logged In Successfully!!!');</script>";
echo "<script>window.location.href='menu.php'</script>";
}
else
{
	echo "<script>alert('Enter Correct Username & Password');</script>";
echo "<script>window.location.href='login.php'</script>";
}

?>