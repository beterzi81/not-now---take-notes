<?php
include "config.php";
if (!(isset($_SESSION['uyeid']))) {

    ?>


<?php

$tut1=0;

$uye_id= $_POST['uyeid'];

$bul_uye_full="SELECT * FROM uye WHERE Uye_ID='$uye_id'";

$bul_uye = "SELECT * FROM uye";


$kayit = $baglan->query($bul_uye);

$adi = $baglan->query($bul_uye_full);

$adi2= $adi->fetch_assoc();


if($kayit->num_rows>0){
    while($satir = $kayit->fetch_assoc()){

       
       if($_POST['uyeid']==$satir["Uye_ID"] && $_POST['uyesifre']==$satir["Uye_Sifre"]){
           
           $tut1=1;
           $_SESSION['uyeid']= $adi2["Uye_ID"];
           $_SESSION['uyead']=$adi2["Uye_Adi"];;
           $_SESSION['uyesoyad']=$adi2["Uye_Soyadi"];
           $_SESSION['uyesifre']=$adi2["Uye_Sifre"];;
           
          
           echo'<script>alert("Giriş yapıldı, yönlendiriliyorsunuz.");</script> <meta http-equiv="refresh" content=" 0; index.php">';
       
           
           }
       }
       if($tut1!=1){
           echo'<script>alert("ID veya şifreniz yanlış!");</script>
           <meta http-equiv="refresh" content=" 0; login.php">';

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