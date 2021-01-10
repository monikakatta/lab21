<?php include('server.php') ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration form </title>
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
    <div class="header">
         <h2>Login</h2>
         </div>
         <form method="post" action="login.php">
         <?php include('errors.php');?>
         <div class="input_group">
              <label>Username</label>
              <input type="text" name="username">
         </div>
         
         <div class="input_group">
              <label>Password</label>
              <input type="password" name="password">
         </div>
         
         
         <div class="input_group">
             <button type="submit" name="login" class="btn">login</button>
         </div>
         <p> 
             Not a member? <a href ="registration.php">sign up</a>
             </p>
         </form>
    
</body>
</html>