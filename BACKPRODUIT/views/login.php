<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fintness Shop! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
<?php
require('../config.php');
$isAdmin=1; 
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
  $result = mysqli_query($con,$query) or die(mysqli_error($con));
  $rows = mysqli_num_rows($result);
        
        $row1=mysqli_fetch_array($result,MYSQLI_ASSOC);

        $_SESSION['image'] = $row1['image'];
        $_SESSION['email'] = $row1['email'];
        $_SESSION['id'] = $row1['id'];
        $_SESSION['address'] = $row1['address'];
        $_SESSION['phone'] = $row1['phone'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;









            // Redirect user to index.php
      header("Location: index.php");
         
    }else{
?>



    <div>


      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post" name="login">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
              </div>
              <div>
               <button type="submit" class="btn btn-primary">Login</button><br>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="register.php" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Fitness Shop!</h1>
                  <p>©2019 - Web'Dev</p>
                </div>
              </div>
            </form>
          </section>
        </div>
<?php } ?>
      </div>
    </div>
  </body>
</html>