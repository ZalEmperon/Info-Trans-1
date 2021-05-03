<?php
    include_once("koneksi.php");
    include('session.php');
    $query = "SELECT * FROM data_angkot";
    $result = mysqli_query($koneksi,$query);
?>
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
    <title>HOME</title>
</head>
<body>
    <div class="container pt-4">
      <h1>DASBOR DATA</h1>
      <h2>Welcome <?php echo $login_session; ?></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
      <a href="FormInputTrayek.php" class="btn btn-success">Tambah Data</a>
      <br><br>
      <table class="table table-bordered">
          <tr>
              <th>No</th>
              <th>Trayek angkot</th>
              <th>Jurusan</th>
              <th>Rute</th>
              <th>Kota</th>
              <th>Harga</th>
              <th colspan="2">Action</th>
          </tr>
          <?php
              $no = 1;
              foreach ($result as $row) :?>
              <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $row['id_angkot'];?></td>
                  <td><?php echo $row['jurusan'];?></td>
                  <td><?php echo $row['rute'];?></td>
                  <td><?php echo $row['kota'];?></td>
                  <td><?php echo $row['harga'];?></td>
                  <td><a href="FromEdit.php?id=<?php echo $row['no'];?>" class="btn btn-success">Edit</a>
                  <a href="ProsesHapus.php?id=<?php echo $row['no'];?>" class="btn btn-danger">hapus</a></td>
              </tr>
          <?php $no++;
                  endforeach;?>
      </table>
    </div><br><br>
    <div class="container">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Feedback</th>
        </tr>
        <?php  $no = 1;
        $query1 = "SELECT * FROM feedback";
        $result1 = mysqli_query($koneksi,$query1);
        foreach ($result1 as $rows) :?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $rows['nama'];?></td>
          <td><?php echo $rows['email'];?></td>
          <td><?php echo $rows['feedback'];?></td>
        </tr>
      <?php $no++;endforeach; ?>
      </table>
    </div>
    <script src="../asset/js/bootstrap.js"></script>
</body>
</html>
