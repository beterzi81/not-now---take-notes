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

    <title>Notlarınız</title>
</head>

<body>
    <!-- Navbar -->
    <?php
    include "navbar.php";
    ?>
    <?php
$uye_not_id=$_SESSION['uyeid'];

$uye_not="SELECT * FROM notlar RIGHT JOIN uye_not ON notlar.Not_Baslik=uye_not.Not_Baslik WHERE uye_not.Uye_ID='$uye_not_id'";


$not_sayi= $baglan->query($uye_not);
$not_sayi1=$not_sayi ->num_rows;

for ($i=1; $i <=$not_sayi1 ; $i++) { 
$bul_notlar= "SELECT * FROM notlar RIGHT JOIN uye_not ON notlar.Not_Baslik=uye_not.Not_Baslik WHERE uye_not.Uye_ID='$uye_not_id' AND Not_No=$i";
$notlar= $baglan->query($bul_notlar);
$notlar1= $notlar->fetch_assoc();
$not_baslik_dizi[$i]=$notlar1['Not_Baslik'];

$not_tarih_dizi[$i]=$notlar1['Not_Tarih'];
$not_kendi_dizi[$i]=$notlar1['Not_Kendi'];
?>


    <!-- Notlar -->
    <div class="card mt-4 margin" style="width: 75%;">
        <div class="card-body">
            <h5 class="card-title">Not Başlığı:<?php echo $not_baslik_dizi[$i]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Not Ekleme Tarihi :<?php echo $not_tarih_dizi[$i]; ?></h6>
            <p class="card-text"><?php echo $not_kendi_dizi[$i]; ?></p>
        </div>
        <div>
            <form action="notduzenle.php" method="POST">
            <input type="hidden" name="noteditadi" value="<?php echo $not_baslik_dizi[$i] ?>">
                <input type="hidden" name="noteditkendi" value="<?php echo $not_kendi_dizi[$i]; ?>">
                <button type="submit" class="btn btn-primary">Notu Düzenle</button>
            </form>
        </div>
        <div>
            <form action="notsil-do.php" method="POST">
                <input type="hidden" name="notsiladi" value="<?php echo $not_baslik_dizi[$i] ?>">
                <button type="submit" class="btn btn-primary mt-2">Notu Sil</button>
            </form>
        </div>
    </div>
    <?php
}
    ?>


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