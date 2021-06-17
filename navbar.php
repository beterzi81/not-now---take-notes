<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid navbar">
            <a class="navbar-brand" href="index.php">Not Now</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
                    </li>
                <?php
if (isset($_SESSION['uyeid'])) {
   
                ?>
 <li class="nav-item">
                        <a class="nav-link" href="notlariniz.php">Notlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notekle.php">Not Ekle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Çıkış Yap</a>
                <?php
}
else {
    

                ?>

                
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Kayıt Ol</a>
                    </li>
                    <?php
}
                    ?>
                   
                    </li>
                </ul>
            </div>
        </div>
    </nav>