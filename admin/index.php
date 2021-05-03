<?php

include_once('koneksi.php');
session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $adminname = mysqli_real_escape_string($koneksi,$_POST['adminname']);
      $password = mysqli_real_escape_string($koneksi,$_POST['password']);

      $sql = "SELECT id FROM adminlogin WHERE adminname = '$adminname' and password = '$password'";
      $result = mysqli_query($koneksi,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['login_user'] = $adminname;
         header("location: beranda.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../asset/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/login.css">
    <title>Login Page</title>
</head>
<body>
    <form action="" method="post">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="adminname">
            </div>
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password">
            </div>
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</body>
</html>
