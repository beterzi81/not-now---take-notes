<?php
include "config.php";
?>
<?php
if (!(isset($_SESSION['uyeid']))) {

    ?>

  
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Kaydol</title>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid navbar">
            <a class="navbar-brand" href="#">Proje Adı</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="signup.php">Kayıt Ol</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="mt-3 center color">
        <h2>Proje Adı</h2>
        <h6>Kayıt Ol</h6>
    </div>
    <div class="center">
        <form class="mt-5" action="signup-do.php" method="POST">
            <div class="mb-3">
                <label for="ad" class="form-label">Adınız</label>
                <input type="text" class="form-control" name="ad" aria-describedby="adHelp">
            </div>
            <div class="mb-3">
                <label for="soyad" class="form-label">Soyadınız</label>
                <input type="text" class="form-control" name="soyad" aria-describedby="soyadHelp">
            </div>
            <div class="mb-3">
                <label for="kullaniciadi" class="form-label">Kullanıcı Adınız</label>
                <input type="text" class="form-control" name="id" aria-describedby="kullaniciadiHelp">
            </div>
            <div class="mb-3">
                <label for="sifre" class="form-label">Şifreniz</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" name="button" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
    
}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0 ; url=index.php"/>';
}
?>