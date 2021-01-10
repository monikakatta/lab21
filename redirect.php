<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="registration.css">
    <title>Home page</title>
</head>
<body>
<div class="header">
         <h2>HOME PAGE</h2>
         </div>
    <div class="content">
        <?php if(isset($_SESSION['success'])):?>
            <div class="error success">
                  <h1>
                      <?php
                           echo $_SESSION['success'];
                           unset($_SESSION['success']);
                       ?>
                  </h1>
            </div>
        <?php endif ?>
        <?php if(isset($_SESSION['username'])):?>
              <p>WELCOME  <strong> <?php echo $_SESSION['username']?> </strong> </p>
              <?php endif ?>
              <p><a href="redirect.php?logout=1" style="color:red">LOGOUT</a></p>
    </div>
</body>
</html>