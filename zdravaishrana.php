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
                <li><a href="index.php">POČETNA</a></li>
                <li><a href="o_sajtu.php">O SAJTU</a></li>
                <li><a class="active" href="zdravaishrana.php">ZDRAVA ISHRANA</a></li>
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
                Šta znači zdrava ishrana?
            </h3>
            <p>Na ovo pitanje, najbolji odgovor dao je Hipokrat: "Sve sto hranom unosimo u nas organizam gradi nas i menja, od toga zavisi
                nasa snaga, zdravlje i zivot. Neka hrana bude tvoj lek, a ne lek tvoja hrana."
                To znači da su jos u davna vremena ljudi znali da su sastojci hrane ono sto moze da nas učini zdravim ili bolesnim.
                Da nebi toliko zalazili u proslost, objašnjavajuci kako je Hipokrat dosao do tog zaključka (poenta je u budućnosti) reći cu samo
                da je savremena medicina utvrdila i potvrdila da je jedan od uzoraka čovekovih bolesti upravo hrana koju jede ili ona koju ne jede.
                Više o zdravoj i uravnotezenoj ishrani u prilozenom linku i videu.
            </p>
        </div>
    </section>
    <footer id="footer">
        <p>copyright © <?php echo date("Y"); ?> Ervin Kačar.</p>
    </footer>
</body>
</html>

