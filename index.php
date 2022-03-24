<?php
session_start();

?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title> Web Sajt</title>
    <link rel="stylesheet" href="cssstyle.css">
</head>
<body>
<div id="container">
    <header class="header">
        <div style="text-align: left;">
            <img src="Slike/logo-sport-fitness.png" style="width:100px; height: 100px; object-fit: cover;">
        </div>
        <div class="navigation">
            <ul>
                <li><a class="active" href="index.php">POČETNA</a></li>
                <li><a href="o_sajtu.php">O SAJTU</a></li>
                <li><a href="zdravaishrana.php">ZDRAVA ISHRANA</a></li>
                <li><a href="ankete.php">ANKETE</a></li>
                <?php
                if (isset($_SESSION["username"])) {
                    echo '<li><a href="logout.php">IZLOGUJ SE</a></li>';
                } else {
                    echo '<li><a href="register.php">REGISTRACIJA</a></li>';
                }
                ?>
            </ul>
        </div>
    </header>
    <section id="author">
        <div class="image-one">
            <img src="slike/eki.png">
        </div>
        <div class="author-info">
            <div class="author-name">
                <p><span class="author-name__label">Ime:</span> Ervin </p>
                <p><span class="author-name__label">Prezime:</span> Kačar </p>
                <p><span class="author-name__label">Telefon:</span> 065/419-419-5</p>
                <p><span class="author-name__label">Email:</span> ervinkacar@gmail.com</p>
            </div>
        </div>

    </section>
    <section class="main">
        <div class="main__info">
            <h3 class="main-title">
                Ankete
            </h3>
            <p>Tehnika prikupljanja podataka i obaveštnja o nekoj pojavi među većim brojem osoba radi statistike,
                ispitivanja tržišta ili javnog mišljenja naziva se anketa..
                Svrha ovog sajta su ankete koje se nalaze na svakoj stranici i vezane su za sve tri razlicite teme</p>
            <p>
                Pravila vezana za učestvovanje u anketama: <br>
                1. Registrujte se i prijavite se kako bi radili anketu<br>
                2. Popunite ankete<br>


            </p>
        </div>
    </section>
    <footer id="footer">
        <p>copyright © <?php echo date("Y"); ?> Ervin Kačar.</p>
    </footer>
</body>
</html>
