<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$mno=$_POST['mno'];
$city=$_POST['ct'];

include("connection.php");
$s="insert into userlogin_tb values('','$fname','$lname','$uname','$pass','$email','$mno','$city')";
echo $s;
$sql=$mysql->prepare($s);
$sql->execute();
echo "<script>alert('Registred Successfully!!!');</script>";
echo "<script>window.location.href='login.php'</script>";

?>