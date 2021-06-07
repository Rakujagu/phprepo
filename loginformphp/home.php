<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<style>
body{
    /* background-color: yellow; */
    /* background: url(https://source.unsplash.com/1600x900/?nature,water); */
    background: url(https://source.unsplash.com/1600x900/?sky);
}
h1{
    color: yellow;
    text-align:center;
   font-size: 100px;
}
a{
    float: right;
    margin-right: 20px;
    font-size: 25px;
    font-weight: bold;
    text-decoration: none;
    border: 2px double green;
    border-radius: 25%;
}
a:hover{
    color: hotpink;
     background-color: blue;
     box-shadow: 0 0 10px blue;
     border: none;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <h1>Welcome  <?php echo $_SESSION['username']; ?></h1>
    <div class="btn">
    <a href="login.php">Log Out</a>
    </div>
</body>
</html>