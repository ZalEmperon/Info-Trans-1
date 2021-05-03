<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">
    *{
      font-family: oswald;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../asset/img/favicon.ico">
  <link rel="stylesheet" href="../asset/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>INPUT DATA</title>
</head>
<body>
  <div class="container mt-5">
    <h1>INPUT DATA TRAYEK</h1>
    <form action="ProsesInputTrayek.php" method="post">
        <label>Masukan Trayek Angkot : </label><br><input type="text" name="id_angkot"><br>
        <label>Masukan Jurusan : </label><br><input type="text" name="jurusan"><br>
        <label>Masukan Rute : </label><br><input type="text" name="rute"><br>
        <label>Masukan Kota : </label><br><input type="text" name="kota"><br>
        <label>Masukan Harga : </label><br><input type="number" name="harga"><br><br>
        <input type="submit" class="btn btn-primary"value="Konfirmasi">
    </form>
  </div>
</body>
</html>
