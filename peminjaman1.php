<?php
session_start();


if (!isset($_SESSION['nama'])) {
    header("location: dash.php");
}


$id = $_SESSION['id'];
$nama = $_SESSION['nama'];
$no = $_GET['id'];

require 'backend/function.php';
require 'backend/fungsiTanggal.php';

$tampil = query("SELECT * FROM datalaptop");

$query = $conn->query("SELECT * FROM datadiri WHERE id = '$id' ORDER BY nis DESC");


// jumlah laptop 
$q = $conn->query("SELECT COUNT(*) AS jmlhLaptop FROM datalaptop");
$barang = $q->fetch_array();

// jumlah peminjam
$l = $conn->query("SELECT COUNT(*) AS jmlhPeminjam FROM datapeminjam");
$use = $l->fetch_array();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>APP Wikrama</title>
    <link rel="stylesheet" type="text/css" href="style/peminjaman.css" />
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <img src="img/User-icon.png" alt="">
        </div>
        <ul>
            <?php foreach ($query as $key => $value): ?>

                <a href="dash.php">
                    <li><i class="fa-solid fa-house"></i>UTAMA</li>
                </a>
                <a href="listPinjam.php?nis=<?= $value['nis'] ?>">
                    <li><i class="fa-solid fa-tablet"></i>DIPINJAM</li>
                </a>
                <a href="dash.php?page=contact">
                    <li><i class="fa-solid fa-phone"></i>CONTACT</li>
                </a>
                <a href="dash.php?page=logout">
                    <li class="logout"><i class="fa-solid fa-right-from-bracket fa-rotate-180"></i>LOGOUT</li>
                </a>
            <?php endforeach; ?>

        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="brand">
                    <h1><b>LENOVO</b></h1>
                </div>
                <div class="user">
                    <p class="btn4"><span>
                            <?= $use['jmlhPeminjam'] ?>
                        </span><br>in-use</p>
                    <p class="btn2"><span>
                            <?= $barang['jmlhLaptop'] ?>
                        </span><br>Available</p>
                    <p class="btn3"><span>
                            <?= $use['jmlhPeminjam'] + $barang['jmlhLaptop'] ?>
                        </span><br>Total</p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <!-- perulangan input database -->

                <?php if ($barang['jmlhLaptop'] == 0): ?>
                    <div class="alert">
                        <h6 class="notif">Stock peminjaman laptop lenovo sudah habis</h6>
                    </div>
                <?php endif; ?>


                <?php foreach ($tampil as $a): ?>
                    <form action="backend/pinjamProses.php?id=<?= $no ?>&&no=<?= $a["nomberLaptop"] ?>" method="post">
                        <a href="#staticBackdrop=<?= $a["nomberLaptop"] ?>" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop=<?= $a["nomberLaptop"] ?>">
                            <div class="card">
                                <div class="box">
                                    <i class="fa-solid fa-laptop"></i>
                                    <table>
                                        <tr>
                                            <td>No. Laptop</td>
                                            <td>:
                                                <?= $a["nomberLaptop"] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                <?= $a["kondisi"] ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </a>
                        <!-- mulai modal -->
                        <div class="modal fade" id="staticBackdrop=<?= $a["nomberLaptop"] ?>">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                            <div class="konfir">konfirmasi Peminjaman</div>
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- isi modal disini -->
                                        <div class="modal-content">
                                            <div class="textModal">
                                                <h6><i class="fa-solid fa-laptop"></i></h6>
                                                <h6 class="detail">
                                                    <div class="isi">Laptop Lenovo <br></div>
                                                    <div class="isi">No. Laptop:
                                                        <?= $a["nomberLaptop"] ?><br>
                                                    </div>
                                                    <div class="isi">Tanggal:
                                                        <?= $result; ?><br>
                                                    </div>
                                                </h6>
                                            </div>
                                            <div class="modalfill">
                                                <p>keperluan:</p>
                                                <textarea maxlength="250" rows="5" cols="50" name="textarea"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tombol peminjaman -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>