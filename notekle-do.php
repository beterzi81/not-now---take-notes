<?php
include 'config.php';
if (isset($_SESSION['uyeid'])) {
?>


<?php
$id=$_SESSION['uyeid'];
$baslik=$_POST["notbaslik"];
$kendi=$_POST["notkendi"];
$time=date('d/m/Y H:i:s');

if ($baslik==NULL || $kendi==NULL) {
  echo'<script>alert("Lütfen bütün alanları doldurun!");</script>
    <meta http-equiv = "refresh" content = " 0 ; url=notekle.php"/>';
}
else {
    $cek="SELECT * FROM notlar";
    $notsayac=$baglan->query($cek);
    $notsayac1=$notsayac->num_rows;
$sira=$notsayac1+1;
$sql_1="INSERT INTO notlar(Not_Baslik,Not_Tarih,Not_Kendi,Not_No)VALUES('".$_POST["notbaslik"]."','".$time."','".$_POST["notkendi"]."','".$sira."')";
$sonuc2=mysqli_query($baglan,$sql_1);

$sql_2="INSERT INTO uye_not(Uye_ID,Not_Baslik)VALUES('".$_SESSION['uyeid']."','".$_POST["notbaslik"]."')";



if ($baglan->query($sql_2) === TRUE) {
    echo'<script>alert("Not eklendi!");</script>
    <meta http-equiv = "refresh" content = " 0 ; url=notlariniz.php"/>';

  } else {
    echo "Error updating record: " . $baglan->error;
  }
}
?>
<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0 ; url=index.php"/>';
}
?>