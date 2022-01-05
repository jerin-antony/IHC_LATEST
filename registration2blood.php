 <?php

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userdatabase');

$name = $_POST['name'];
$emailid = $_POST['emailid'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$s = "select * from bloodtable where emailid = '$emailid' or phone= '$phone'";




$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Email id already Taken";
}
else{
    $reg = "insert into bloodtable(name , emailid , phone , password) values ('$name' , '$emailid', '$phone', '$password')";
    mysqli_query($con, $reg);
    header('location:newform2blood.php');
}


?>