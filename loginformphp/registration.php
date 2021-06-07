
<?php

session_start();

header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['password'];
$number = $_POST['number'];

// $s = "select * from usertable where name = '$name'";
$s = "select * from usertable where user = '$user'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
} else{
    $reg= "insert into usertable(name,user,password,number) values ('$name','$user','$pass','$number')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
}
?>