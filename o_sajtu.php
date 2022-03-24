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
                <li><a class="active" href="o_sajtu.php">O SAJTU</a></li>
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
                O ovom sajtu
            </h3>
            <p>
                Nastojimo da naši korisnici u potpunosti budu zadovoljni uslugama koje pružamo i svakodnevno radimo na unapređenju istih. Pre korišćenja naših usluga bitno je da pažljivo pročitate ovaj dokument koji sadrži bitna obaveštenja.<br>
                Sledeći uslovi korišćenja jesu sporazum između Vas, kao korisnika naših usluga, i privrednog društva Stetoskop d.o.o. iz Srbije ( “Stetoskop”, “mi”, “nas”), administrator web sajta stetoskop.info (“Sajta”) i povezanih web sajtova, aplikacija, servisa i mobilnih aplikacija omogućenih od strane Stetoskop d.o.o. Ti uslovi zajedno sa našom politikom privatnosti pravno uokviruju korišćenje naših usluga bez obzira da li ste ili niste kreirali nalog na sajtu stetoskop.info.<br>
                <br>
                Ukoliko se ne slažete sa uslovima korišćenja smatrajte da nemate pravo da koristite naše usluge. Korišćenjem, pristupanjem uslugama na bilo koji drugi način ili kreiranjem naloga na sajtu Stetoskop.info prihvatate uslove korišćenja, uključujući i politiku privatnosti koja se nalazi na sajtu. Ukoliko na ovaj način smatrate da niste prihvatili uslove korišćenja ne možete koristiti usluge kao takve.<br>
                Obaveštenje o odricanju od mogućnosti pokretanja sudskog postupka: Ukoliko prihvatite uslove korišćenja odričete se mogućnosti pokretanja bilo koje vrste sudskog postupka u smislu naknade eventualne materijalne ili nematerijalne štete nastale korišćenjem usluga i/ili informacija objavljenih na sajtu.

            </p>
        </div>
    </section>
    <footer id="footer">
        <p>copyright © <?php echo date("Y"); ?> Ervin Kačar.</p>
    </footer>
</body>
</html>
