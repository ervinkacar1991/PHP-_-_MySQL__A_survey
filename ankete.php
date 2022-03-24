<?php
include 'surveys_controller.php'
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
                <li><a href="zdravaishrana.php">ZDRAVA ISHRANA</a></li>
                <li><a class="active" href="ankete.php">ANKETE</a></li>
                <?php
                if (isset($_SESSION["username"])) {
                    index();
                    echo '<li><a href="logout.php">IZLOGUJ SE</a></li>';
                } else {
                    echo '<li><a href="register.php">REGISTRACIJA</a></li>';
                }
                ?>
            </ul>
        </div>
    </header>
    <section class="main">
        <div class="main__info">
            <h3 class="main-title">
                Anketa
            </h3>
            <p>
                Sistematska procedura intervjuisanja i realizacije
                upitnika da bi se postavila unapred definisana
                pitanja i beleženje odgovora. Pitanja su numericki organizovana i kodirana, i moze se sprovoditi na dva
                nacina: intervjuisanje (direktno) i uputnik (indirektno ili pisano).
            </p>

            <?php if ($_SESSION['username']) { ?>
                
                <?php if (isset($_SESSION['survey_errors'])) { ?>
                    <?php foreach ($_SESSION['survey_errors'] as $item) { ?>
                        <p style="color: red; font-weight: 500;">* <?php echo $item; ?></p>
                    <?php } ?>
                <?php } ?>

                <form method="post" action="surveys_controller.php">
                    <?php foreach ($_SESSION['survey'] as $key => $item) { ?>
                        <h3><?php echo $key + 1; ?> - <?php echo $item['description']; ?></h3>
                        <?php foreach (show($item['id']) as $question) { ?>
                            <input type="radio" id="survey" name="<?php echo $item['id']; ?>"
                                   value="<?php echo $question['id']; ?>">
                            <label for="survey"><?php echo $question['question']; ?></label><br>
                        <?php } ?>
                    <?php } ?>
                    <button class="button-1" name="submit_survey" role="button">Potvrdi</button>
                </form>

            <?php } ?>
        </div>
    </section>
    <footer id="footer">
        <p>copyright © <?php echo date("Y"); ?> Ervin Kačar.</p>
    </footer>
</body>
</html>

