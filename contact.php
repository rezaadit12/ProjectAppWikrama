<?php
if (!isset($_SESSION["nama"])) {
    header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/contact.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="box">
                <div class="text">
                    <h2>Kontak CS Untuk informasi<br> lebih lanjut</h2>
                    <hr color="#8087C6">
                    <p class="text1">Bila memiliki masalah, keluhan,<br> dan pertanyaan. Silahkan hubungi<br> nomber
                        berikut.</p>
                    <div class="card">
                        <p class="text2">Hubungi CS</p>
                        <div class="card2">
                            <p>WA: 0878-3752-1637</p>
                            <button onclick="redirwhatsapp()">HUBUNGI</button>
                        </div>
                    </div>
                </div>

                <div class="img">
                    <img src="img/Logo-orang.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <script>
        function redirwhatsapp() {
            window.location.href = "https://wa.me/+6287837521637"
        }
    </script>
</body>

</html>