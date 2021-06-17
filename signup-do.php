<?php
include "config.php";
?>

<?php
if (!(isset($_SESSION['uyeid']))) {

    ?>
<?php 

if(isset($_POST["button"])){
   

    
    if(($_POST["ad"] && $_POST["soyad"] && $_POST["id"]&& $_POST["password"]) !=NULL){
   
   $sql1="INSERT INTO uye(Uye_ID,Uye_Adi,Uye_Soyadi,Uye_Sifre)values('".$_POST["id"]."','".$_POST["ad"]."','".$_POST["soyad"]."','".$_POST["password"]."')";

   $sonuc1=mysqli_query($baglan,$sql1);
   echo '<script type="text/javascript">alert("Kayıt başarılı,giriş sayfasına yönlendiriliyorsunuz!");</script>
   <meta http-equiv = "refresh" content = " 0.5 ; url=login.php"/>';
   ?>

 
<?php	
}
    else {
    echo '<script type="text/javascript">alert("Lütfen bütün alanları doldurunuz!");</script>
    <meta http-equiv="refresh" content=" 0.5; SignUp.php>';
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