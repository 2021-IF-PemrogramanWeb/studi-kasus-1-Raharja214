<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         body {
            background-image: url('img/background-2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
         }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDPWEB Halaman Utama</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                    <h6>Silahkan pilih menu yang tertera di bawah!!!</h6>
                    <button onclick="document.location='tabel.php'">Tabel</button>
                    <button onclick="document.location='chart.php'">Chart</button>
                    <button onclick="document.location='index.php'">Keluar</button>
                </div>
            </div>

            
        </div>
</body>
</html>