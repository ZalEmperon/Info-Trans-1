<?php
   include('koneksi.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($koneksi,"SELECT adminname from adminlogin where adminname = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['adminname'];

   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>
