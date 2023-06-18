<?php
session_start();

require 'backend/function.php';

$id = $_SESSION['id'];
$nama = $_SESSION['nama'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/dash.css" />
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <title>APP Wikrama</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <img src="img/User-icon.png" alt="">
        </div>
        <ul>
            <?php
            $query = $conn->query("SELECT * FROM datadiri WHERE id = '$id' ORDER BY nis DESC");
            $i = 1;
            ?>

            <?php foreach ($query as $key => $value): ?>
                <a href="dash.php?page=utama">
                    <li class="active"><i class="fa-solid fa-house"></i>UTAMA</li>
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
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'utama':
                include 'choose.php';
                break;
            case 'peminjaman':
                include 'peminjaman.php';
                break;
            case 'logout';
                include 'backend/logout.php';
                break;
            case 'pengembalian':
                include '';
                break;
            case 'contact';
                include 'contact.php';
                break;
        }
    } else {
        include 'choose.php';
    }
    ?>
</body>

</html>