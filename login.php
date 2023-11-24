<?php
session_start();
include "./connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Login</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets/scss/style.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body class="bg-dark">

  <?php
  if (isset($_POST['submit'])) {
    // get elements
    $uname = $_POST['name'];
    $password = $_POST['password'];
    // get error
    $error = array();
    // checking 
    // all is empty
    if (empty($uname) or empty($password)) {
      echo "<script>alert('User name and Password is BLANK');</script>";
    }
    $count = 0;
    // query
    $res = mysqli_query($link, "select * from user where Uname = '$uname' and Password = '$password'");
    $count = mysqli_num_rows($res);
    if ($count == 0) {
      echo "<script>alert('User not found');</script>";
    } else {
      $_SESSION['uname'] = $uname;
      $_SESSION['logged_in'] = true;
      ?>
       <script type="text/javascript">
                window.location = "./index.php";
            </script>
      <?php
    }
  }
  ?>
  <div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="login-content">
        <div class="login-logo">
          <a href="./login.php">
            <img class="align-content" src="images/logo.png" alt="">
          </a>
        </div>
        <div class="login-form">
          <form>
            <div class="form-group">
              <label>User Name</label>
              <input type="text" class="form-control" placeholder="Your user name" name="name">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <form method="post" action="login.php">
              <button type="submit" name="submit" class="btn btn-success btn-flat mt-8 mb-8" method="post">Sign in</button>
            </form>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>

</html>