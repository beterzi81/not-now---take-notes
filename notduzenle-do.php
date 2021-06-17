<?php
include "config.php";
?>
<?php
if (isset($_SESSION['uyeid'])) {

    ?>

 

<?php
$yeninot=$_POST['notduzenlekendi'];
$notadi=$_POST['notadi'];





if (($yeninot!=NULL)) {
    $updt_sql="UPDATE notlar SET Not_Kendi='$yeninot' WHERE Not_Baslik='$notadi'";
    
    
    if ($baglan->query($updt_sql) === TRUE) {
        echo'<script>alert("Not güncellendi!");</script>
  <meta http-equiv = "refresh" content = " 0.5 ; url=notlariniz.php"/>';
    } else {
      echo "Error updating record: " . $baglan->error;
    }
}
else {
    echo'<script>alert("Boş alan bulundu!");</script>
  <meta http-equiv = "refresh" content = " 0.5 ; url=notlariniz.php"/>';
}

?>
<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0 ; url=index.php"/>';
}
?>