<?php
     session_start();
     $username="";
     $email="";
     
     $errors = array();

    //connnecting to the db
    $db = mysqli_connect('localhost','root','','registration');
    if(isset($_POST['register']))
    {
        $username =  $db -> real_escape_string($_POST['username']);
        $email =$db -> real_escape_string($_POST['email']);
        $password=$db -> real_escape_string($_POST['password']);
        $copassword=$db -> real_escape_string($_POST['copassword']);
        
        //all fields are filled or not
        if(empty($username)){
            array_push($errors,"username is req");
        }
        if(empty($email)){
            array_push($errors,"email is req");

        }
        if(empty($password)){
            array_push($errors,"password is req");
        }
        
        if($password!=$copassword){
            array_push($errors,"two passwords didnt match");

        }   
        //no errors saving the data into db
        if(count($errors)==0){
            $password=md5($password);//encrypt
            $sql="INSERT INTO  users(username,email,password)  VALUES('$username','$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION['username']=$username;
            $_SESSION['success']="you are now  logged in ";
            header('location:redirect.php');

        }


    }
    //log in 
    if(isset($_POST['login']))
    {
        $username =  $db -> real_escape_string($_POST['username']);
        
        $password=$db -> real_escape_string($_POST['password']);
       
        
        //all fields are filled or not
        if(empty($username)){
            array_push($errors,"username is req");
        }
        if(empty($password)){
            array_push($errors,"password is req");

        }
        print(count($errors));
        if(count($errors)==0){
            $password=md5($password);
            $query=" SELECT * FROM users WHERE username='$username' AND password='$password' ";
            $result=mysqli_query($db,$query);
            
            if(mysqli_num_rows($result)==1){
                $_SESSION['username']=$username;
            $_SESSION['success']="you are now  logged in ";
            header('location:redirect.php');
            }
            else{
                array_push($errors,"password is incorrect");
                header('location:login.php');
            }
        }

    }
    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }


?>