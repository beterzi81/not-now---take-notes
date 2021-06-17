<?php
include "config.php";
?>
<?php
if ((isset($_SESSION['uyeid']))) {


?>


<?php

session_destroy();

echo'<meta http-equiv="refresh" content=" 0; index.php">';

?>
<?php

}
else {
    echo'<script>alert("Bu şekilde bu sayfaya giremezsiniz!");</script>
    <meta http-equiv = "refresh" content = " 0 ; url=index.php"/>';
}
?>