<?php
include 'surveys_controller.php';
index();

// session_start();
if($_SESSION['role'] != 'admin')
    header('location: index.php');
?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title> Administracija</title>
    <link rel="stylesheet" href="cssstyle.css">
    <link rel="stylesheet" href="admincssstyle.css">
    <link rel="stylesheet" href="charts.css">
</head>
<body>
<div id="container">
    <header class="header">
        <div style="text-align: left;">
            <img src="Slike/logo-sport-fitness.png" style="width:100px; height: 100px; object-fit: cover;">
        </div>
        <div class="navigation">
            <ul>
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
    <div class="admin-page">
        <section class="admin-nav">
            <nav>
                <ul>
                    <li><a href="admin.php" class="active">DASHBOARD</a></li>
                    <li><a href="admin.php">ANKETE</a></li>
                </ul>
            </nav>
        </section>
        <div class="main-admin">
            <section class="card">
                <dl>
                    <dt>
                        Statistika odgovora po svakom pitanju:
                    </dt>
                    <?php foreach ($_SESSION['survey'] as $key => $item) { ?>
                        <?php $questions = show($item['id']); ?>
                        <dd class="percentage percentage-<?php echo count($questions) * 20 ?>"><span class="text"><?php echo $key + 1; ?> - <?php echo $item['description']; ?></span></dd>
                    <?php } ?>
                </dl>
            </section>
        </div>
    </div>
</body>
</html>
