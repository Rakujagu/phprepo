
<?php

session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

// $name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['password'];
// $number = $_POST['number'];

$s = "select * from usertable where user = '$user' && password ='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']=$user;
   header('location:home.php');
} else{
    header('location:login.php');
}
?>