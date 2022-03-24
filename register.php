<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="csszaregistraciju.css">
  <script>
  function proveriValidaciju() {
    var x = document.forms["mojaForma"]["username"].value;
    if (x.length < 5 || !isNaN(x)) {
        alert("Unesite username veći od 5 karaktera");
        return false;
    }
	var y = document.forms["mojaForma"]["password_1"].value;
    if (y.length < 5) {
        alert("Unesite password veći od 5 karaktera");
        return false;
    }
	var z = document.forms["mojaForma"]["password_2"].value;
    if (z.length < 5) {
        alert("Unesite password veći od 5 karaktera");
        return false;
    }
}
  </script>
</head>
<body>
  <div class="header">
  	<h2>Registracija</h2>
  </div>
	
  <form method="post" action="server.php" name="mojaForma" onsubmit="return proveriValidaciju()">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Korisničko ime</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
	 <label>Br. Indeksa</label>
  	  <input type="text" name="brindexa" value="<?php echo $brindexa; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
	
  	<div class="input-group">
  	  <label>Potvrdi password</label>
  	  <input type="password" name="password_2">
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registeruj se</button>
  	</div>
  	<p>
  		Već ste član? <a href="login.php">Prijavi se</a><br>
		<a href="index.php">Početna</a>
  	</p>
  </form>
</body>
</html>