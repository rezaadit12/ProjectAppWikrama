<?php

if (!isset($_SESSION["nama"])) {
  header("location: index.php");
}

$id = $_SESSION['id'];
$nama = $_SESSION['nama'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style/choose.css">
</head>

<body>
  <div id="bannerimage">
    <div class="content">
      <?php
      $query = $conn->query("SELECT * FROM datadiri WHERE id = '$id' ORDER BY nis DESC");
      $i = 1;

      ?>
      <!-- Add your website content here -->
      <?php foreach ($query as $key => $value): ?>
        <h3>SELAMAT DATANG</h3>
        <h1>
          <?= $value['nama'] ?>
        </h1>
        <h4>
          <?= $value['nis'] ?> <b>|</b>
          <?= $value['rombel'] ?> <b>|</b>
          <?= $value['rayon'] ?>
        </h4>
      </div>
    </div>

    <div class="subs">
      <h1>Pinjam apa hari ini?</h1>
      <hr class="line1">
    </div>
    <a href="peminjaman1.php?id=<?= $value["id"] ?>">
      <div class="card">
        <img src="img/lenovo.png" alt="Image" style="width: 150%; height: auto;">
        <span class="texthead">Laptop <br> Lenovo</span>
        <span class="subtitle2">Available</span>
        <span class="subtitle">In - Use</span>
      </div>
    </a>

    <a href="#">
      <div class="card">
        <img src="img/acer.png" alt="Image" style="width: 150%; height: auto;">
        <span class="texthead">Laptop <br> Acer</span>
        <span class="subtitle2">Available</span>
        <span class="subtitle">In - Use</span>
      </div>
    </a>

    <a href="#">
      <div class="card">
        <img src="img/Cardhp.png" alt="Image" style="width: 150%; height: auto;">
        <span class="textheadhp">Handphone</span>
        <span class="subtitle2">Available</span>
        <span class="subtitle">In - Use</span>
      </div>
    </a>


    <div class="card">
      <img src="img/acer.png" alt="Image" style="width: 150%; height: auto; filter: brightness(50%);">
      <span class="textheadhp">Lainnya</span>
    </div>
  </body>

  </html>
<?php endforeach; ?>