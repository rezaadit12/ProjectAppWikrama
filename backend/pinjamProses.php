<?php


require 'function.php';
require 'fungsiTanggal.php';

// asset
$id = $_GET['id'];
$lapNO = $_GET['no'];
$textarea = $_POST['textarea'];

$dataLaptop = query("SELECT * FROM dataLaptop WHERE nomberLaptop = $lapNO")[0];
$tampil = query("SELECT * FROM dataDiri WHERE id = $id")[0];


// menangkap
$nama = htmlspecialchars($tampil['nama']);
$nis = htmlspecialchars($tampil['nis']);
$rombel = htmlspecialchars($tampil['rombel']);
$rayon = htmlspecialchars($tampil['rayon']);
$brand = htmlspecialchars($dataLaptop['brandLaptop']);
$kondisi = htmlspecialchars($dataLaptop['kondisi']);
$noLap = $lapNO;
$alasan = $textarea;
$tanggal = $result;


// menambah
$sql = "INSERT INTO datapeminjam
        VALUES
        ('','$nama', '$nis', '$rombel', '$rayon','$alasan','$noLap', '$brand', '$kondisi', '$tanggal')";

$query = mysqli_query($conn, $sql);




// menghapus
$id = $dataLaptop['id'];
$sql = "DELETE FROM datalaptop WHERE id = $id";
$result = mysqli_query($conn, $sql);


// hasil
if ($result) {
    echo "<script>
        alert('Peminjaman berhasil, silahkan ambil laptop sesuai dengan nombernya');
        document.location.href='../dash.php';
    </script>";
} else {
    echo "gagal";
}







?>