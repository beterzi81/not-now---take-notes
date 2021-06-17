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

    <title>Giriş Yap</title>
</head>

<body>
    <div class="mt-3 center color">
        <h2>Not Now</h2>
        <h6>Giriş Yap</h6>
    </div>
    <div class="center">
        <form class="mt-5" action="login-do.php" method="POST">

            <div class="mb-3">
                <label for="uyeid" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control" name="uyeid" aria-describedby="kullaniciadiHelp">
            </div>
            <div class="mb-3">
                <label for="uyesifre" class="form-label">Şifre</label>
                <input type="password" class="form-control" name="uyesifre">
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
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