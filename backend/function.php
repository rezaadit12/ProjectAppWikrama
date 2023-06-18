<?php

$conn = mysqli_connect("localhost", "root", "", "dbproject");

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($_POST["username"]));
    $nis = strtolower(stripslashes($_POST["nis"]));
    $rombel = strtolower(stripslashes($_POST["rombel"]));
    $rayon = strtolower(stripslashes($_POST["rayon"]));

    // cek username sudah ada apa belum
    $result = mysqli_query($conn, "SELECT nis FROM datadiri  WHERE nis = '$nis'");

    if (mysqli_num_rows($result) > 0) {
        echo "   <script>
                        alert('data sudah ada!')
                    </script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO datadiri VALUES ('','$username', '$nis', '$rombel','$rayon')");
    return mysqli_affected_rows($conn);
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $arrs = [];
    while ($arr = mysqli_fetch_assoc($result)) {
        $arrs[] = $arr;
    }
    return $arrs;
}


function tambah($add)
{
    global $koneksi;

    $nama = $add["nama"];
    $rombel = $add["rombel"];
    $rayon = $add["rayon"];


    $tamb = "INSERT INTO 4latihan
        VALUES
        ('','$nama','$rombel','$rayon')";

    mysqli_query($koneksi, $tamb);
    return mysqli_affected_rows($koneksi);
}


?>