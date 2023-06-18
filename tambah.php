<!--     IMPORTANT!!!!!!

        
        halaman ini sedang dalam tahap pengerjaan oleh developer, ini hanya sebatas
        untuk mepermudah menginput ke database.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data laptop</title>
</head>

<body>
    <center>
        <p><b>halaman ini sedang dalam tahap pengerjaan oleh developer, ini hanya sebatas untuk mempermudah menginput ke
                database</p>
        <hr><br><br>
    </center>

    <form action="" method="post">
        <table>
            <tr>
                <td>No. Laptop</td>
                <td><input type="text" name="no"></td>
            </tr>
            <tr>
                <td>Nama Laptop</td>
                <td><input type="text" name="brand"></td>
            </tr>
            <tr>
                <td>Kondisi</td>
                <td><input type="text" name="kondisi"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Tambah</button></td>
            </tr>
        </table>
    </form>

</body>

</html>



<?php
$server = mysqli_connect("localhost", "root", "", "dbproject");

if (isset($_POST["submit"])) {

    $no = $_POST['no'];
    $brand = $_POST['brand'];
    $kondisi = $_POST['kondisi'];

    $sql = "INSERT INTO datalaptop
                VALUES
                ('','$brand','$no','$kondisi')";

    $query = mysqli_query($server, $sql);

    if ($query) {
        // header("location:awal.php");
        echo "<script>
                alert('berhasil ges');
                document.location.href='tambah.php';
            </script>";
    } else {
        echo "gagal ges";
    }
}

?>