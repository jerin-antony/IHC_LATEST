<?php

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userdatabase');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = $_POST['date'];
$time = $_POST['time'];

$s = "select * from doctable where email = '$email' or phone= '$phone'";




$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Email id already Taken";
}
else{
    $reg = "insert into doctable(fname , lname , email , phone , address , date , time) values ('$fname' , '$lname' ,'$email', '$phone', '$address' , '$date' , '$time')";
    mysqli_query($con, $reg);
   // header('location:doctorapp.html');
    echo "SUCCESSFULL";
}


?>