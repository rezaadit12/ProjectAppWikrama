<?php
session_start();

if (!isset($_SESSION["nama"])) {
    header("location: index.php");
}

require 'backend/function.php';

$nis = $_GET['nis'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="style/listPInjam.css">
    <title>List Peminjaman</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <img src="img/User-icon.png" alt="">
        </div>
        <ul>
            <a href="dash.php">
                <li><i class="fa-solid fa-house"></i>UTAMA</li>
            </a>
            <a href="listPinjam.php?nis=<?= $nis ?>">
                <li><i class="fa-solid fa-tablet"></i>DIPINJAM</li>
            </a>
            <a href="dash.php?page=contact">
                <li><i class="fa-solid fa-phone"></i>CONTACT</li>
            </a>
            <a href="dash.php?page=logout">
                <li class="logout"><i class="fa-solid fa-right-from-bracket fa-rotate-180"></i>LOGOUT</li>
            </a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="content">
                <?php

                $q = $conn->query("SELECT COUNT(*) AS jmlhPeminjam FROM datapeminjam  WHERE nis = '$nis' ");
                $barang = $q->fetch_array();

                $datapinjam = query("SELECT * FROM datapeminjam WHERE nis = '$nis' ");

                ?>

                <div class="table">
                    <table cellspacing='0'>
                        <thead>
                            <tr>
                                <th class="judul" colspan="6">Daftar Peminjaman Anda</th>
                            </tr>
                            <tr>
                                <th>No.</th>
                                <th>Nama Device</th>
                                <th>No. Device</th>
                                <th>Kondisi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $b = 1 ?>
                                <?php if ($barang['jmlhPeminjam'] == 0): ?>
                                    <td colspan="6">
                                        <center>Tidak ada device yang dipinjam</center>
                                    </td>
                                <?php endif; ?>
                                <?php foreach ($datapinjam as $p): ?>

                                    <td>
                                        <?= $b ?>
                                    </td>
                                    <td>
                                        <?= $p['brandLaptop'] ?>
                                    </td>
                                    <td>
                                        <?= $p['noLaptop'] ?>
                                    </td>
                                    <td>
                                        <?= $p['kondisi'] ?>
                                    </td>
                                    <td>
                                        <?= $p['tanggal'] ?>
                                    </td>
                                    <td>
                                        <a href="backend/kembaliProses.php?id=<?= $p['id'] ?>"
                                            onclick="return confirm('Anda yakin sudah mengembalikannya')">Sudah
                                            Dikembalikan</a>
                                    </td>
                                </tr>
                                <?php $b++ ?>
                            <?php endforeach; ?>
                            <tr>
                                <th class="judul" colspan="6"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>