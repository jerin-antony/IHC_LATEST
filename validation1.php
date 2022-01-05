<?php

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userdatabase');

$emailid = $_POST['emailid'];
$password = $_POST['password'];

$s = "select * from usertable where emailid = '$emailid' and password = '$password'";




$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==1)
{
    header('location:dashboard.html');
}
else{
    header('location:newform2.php');
}


?>