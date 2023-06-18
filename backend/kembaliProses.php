<?php
require 'function.php';

$id = $_GET['id'];
$tampil = query("SELECT * FROM datapeminjam WHERE id = $id")[0];

// menambah
$namaBrand = htmlspecialchars($tampil['brandLaptop']);
$noLap = htmlspecialchars($tampil['noLaptop']);
$kondisi = htmlspecialchars($tampil['kondisi']);

$sql = "INSERT INTO datalaptop
VALUES
('','$namaBrand','$noLap','$kondisi')";

$query = mysqli_query($conn, $sql);



// menghapus
$sql = "DELETE FROM datapeminjam WHERE id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
            alert('pengembalian selesai');
            document.location.href='../dash.php';
        </script>";
} else {
    echo "gagal";
}




?>