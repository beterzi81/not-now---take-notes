<?php
include "config.php";
?>
<?php
if (isset($_SESSION['uyeid'])) {

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

    <title>Not Ekle</title>
</head>

<body>
    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>
    <div class="center">
        <form class="mt-5" method="POST"  action="notekle-do.php">
        <div class="mb-3">
                <label for="notbaslik" class="form-label">Not Başlığı</label>
                <input type="text" class="form-control" name="notbaslik" aria-describedby="nottarihHelp">
            </div>
            <div class="mb-3">
                <label for="notkendi" class="form-label">Notunuz</label>
                <input type="text" class="form-control" name="notkendi" style="height:200px;">
            </div>
            <button type="submit" class="btn btn-primary">Not Ekle</button>
        </form>
    </div>




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