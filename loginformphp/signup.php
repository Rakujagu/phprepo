
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration Page</title>

    <style>
        button{
            margin-top: 10px;
        }
        .container{
            min-height: 450px;
        }
.font i{
    margin-bottom: 10px;
    margin-left: 8px;
}
    </style>
</head>
<body>
  
    <div class="font">
        <i class="fa fa-user-circle" style="font-size:80px;"></i>
    </div>
    <div class="container">
      
    <form action="registration.php" method="post">
    <div class="content">
    <label> <i class="fa fa-info"></i> Full name</label>
    <input type="text" name="name" class="name" required placeholder="Enter your name">
    </div>
    <div class="content">
    <label> <i class="fa fa-user"></i> User name</label>
    <input type="text" name="user" class="user" required placeholder="Enter username">
    </div>
    <div class="content">
    <label><i class="fa fa-lock"></i> Password</label>
    <input type="password" name="password" class="password" required placeholder="Enter password">
    </div>
    <div class="content">
    <label> <i class="fa fa-mobile"></i> Mobile no</label>
    <input type="number" name="number" class="number" required placeholder="Enter your number">
    </div>
    
    <button type="submit">Register</button>
    </form>
    </div>
</body>
</html>