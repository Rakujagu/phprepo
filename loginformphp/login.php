<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Page</title>
</head>
<body>
  
    <div class="font">
        <i class="fa fa-user-circle" style="font-size:88px;"></i>
    </div>
    <div class="container">
      
    <form action="validation.php" method="post">
    <div class="content">
    <label> <i class="fa fa-user"></i> User name</label>
    <input type="text" name="user" class="user" required placeholder="Enter username">
    </div>
    <div class="content">
    <label><i class="fa fa-key"></i> Password</label>
    <input type="password" name="password" class="password" required placeholder="Enter password">
    </div>
    <button type="submit">Log In</button>
    </form>
    </div>
</body>
</html>