<?php
include 'config.php';

?>
<?php
if (isset($_SESSION['uyeid'])) {

    ?>

<?php

$temp=$_POST["notsiladi"];
$not_sayisi = "SELECT * FROM notlar";
$not_sayi= $baglan->query($not_sayisi);
$not_sayi1=$not_sayi ->num_rows;

$bul_not= "SELECT * FROM notlar WHERE Not_Baslik='$temp'";
$not= $baglan->query($bul_not);
$not1= $not->fetch_assoc();

$not_sira=$not1["Not_No"];
     


$dlt1 = "DELETE FROM notlar WHERE Not_Baslik='$temp'";
$dlt2 = "DELETE FROM uye_not WHERE Not_Baslik='$temp'";

$sonuc1=$baglan->query($dlt2);

 
if ($baglan->query($dlt1) === TRUE) {
    echo'<script>alert("Not silindi!");</script>
        <meta http-equiv = "refresh" content = " 0 ; url=notlariniz.php"/>';
  } else {
    echo "Error deleting record: " . $baglan->error;
  }

if($not_sayi1!=$not_sira){
    $updt = "UPDATE notlar SET Not_No =$not_sira  WHERE Not_No =$not_sayi1 ";
    $son=$baglan->query($updt);

  }


?>
<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0 ; url=index.php"/>';
}
?>
