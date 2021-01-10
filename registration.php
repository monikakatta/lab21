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
         <h2>Registration</h2>
         </div>
         <form method="post" action="registration.php">
             <?php include('errors.php');?>
         <div class="input_group">
              <label>Username</label>
              <input type="text" name="username" value="<?php echo $username;?>">
         </div>
         <div class="input_group">
              <label>Email</label>
              <input type="text" name="email" value="<?php echo $email;?>">
         </div>
         <div class="input_group">
              <label>Password</label>
              <input type="password" name="password">
         </div>
         <div class="input_group">
              <label>confirm password</label>
              <input type="password" name="copassword">
         </div>
         
         <div class="input_group">
             <button type="submit" name="register" class="btn">Register</button>
         </div>
         <p> 
             Already a member? <a href ="login.php">sign in</a>
             </p>
         </form>
    
</body>
</html>