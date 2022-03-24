<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="csszaregistraciju.css">
</head>
<body>
  <div class="header">
  	<h2>Prijava</h2>
  </div>
	 
  <form method="post" action="server.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Još niste član? <a href="register.php">Registruj se</a><br>
		<a href="index.php">Početna</a>
  	</p>
  </form>
</body>
</html>