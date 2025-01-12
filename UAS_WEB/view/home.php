<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuliner Tradisional</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <?php include 'includes/randomPic.php'; ?>
    <style>
        body {
            background-color:rgb(241, 240, 236);
        }
        .jumbotron {
            background-image: url('<?php echo getRandomImage(); ?>');
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .card {
            margin: 20px;
            padding: 20px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-4" style="background-color:rgba(220, 220, 220, 0.16); padding:10px; border-radius:10px;">Selamat Datang di Daftar Kuliner Tradisional!</h1>
        <p class="lead" style="font-weight: bold">Temukan berbagai kuliner dari seluruh Indonesia.</p>
        <hr class="my-4">
        <p>Silahkan masukan data makanan kesukaan Anda !!</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="?page=makanan" role="button">Lihat Semua Kuliner</a>
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="randomPic/nasgor.jpg" alt="Gambar Kuliner">
                    <div class="card-body">
                        <h5 class="card-title">Nasi Goreng</h5>
                        <p class="card-text">Nasi goreng adalah makanan khas Indonesia yang terbuat dari nasi yang digoreng dengan berbagai bumbu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="randomPic/gado.jpg" alt="Gambar Kuliner">
                    <div class="card-body">
                        <h5 class="card-title">Gado-Gado</h5>
                        <p class="card-text">Gado-gado adalah makanan khas Indonesia yang terbuat dari sayuran yang direbus dan disiram dengan saus kacang.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="randomPic/sate.jpg" alt="Gambar Kuliner">
                    <div class="card-body">
                        <h5 class="card-title">Sate</h5>
                        <p class="card-text">Sate adalah makanan khas Indonesia yang terbuat dari daging yang dibumbui dan dibakar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>