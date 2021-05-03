<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="asset/img/favicon.ico">
    <style media="screen">
      html {
        scroll-behavior: smooth;
      }
      *{
        font-family: oswald;
      }
      .form {
        margin: 0 auto;
        width:250px;
      }
    </style>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Beranda</title>
  </head>
  <body style="background-color:#558b2f;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-weight:bold;">Info Trans</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="info.php?rute=">Kendaraan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.html">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container bg-white rounded pt-2 pb-5 mt-4 ml-5">
      <form class="form mt-5 p-2" action="contactform.php" method="post">
        <div class="mb-3">
          <div class="fw-bold p-2 text-success">
            <?php if(isset($_GET['msg'])){
                $Message = "Terimakasih atas masukannya";
                echo $Message;}?>
          </div><br>
          <label class="form-label">Nama :</label>
          <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email address :</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Feedback :</label>
          <textarea class="form-control" name="feedback" rows="8" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
    <script src="asset/js/bootstrap.js"></script>
  </body>
</html>
