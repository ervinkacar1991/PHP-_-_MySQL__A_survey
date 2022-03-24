<?php

include 'conn.php';

// deklaracija varijabli
$username = "";
$email    = "";
$brindexa = "";
$errors = array();
$_SESSION['success'] = "";



// REGISTracija
if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $brindexa = mysqli_real_escape_string($db, $_POST['brindexa']);


  if (empty($username)) { array_push($errors, "Unesite username");  }
  if (empty($email)) { array_push($errors, "Unesite email"); }
  if (empty($password_1)) { array_push($errors, "Unesite sifru"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Pasword se ne poklapa");
  }


  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO users(username, email, password, brindexa, prioritet) 
  			  VALUES('$username', '$email', '$password', '$brindexa', 'student')";
  	mysqli_query($db, $query);

  	header('location: login.php');
  }

}
// LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Unesite username");
  }
  if (empty($password)) {
  	array_push($errors, "Unesite sifru");
  }

  if (count($errors) == 0) {
  	$password = md5($password);

  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
      $role = '';
  	if (mysqli_num_rows($results) == 1) {
      while($row = $results->fetch_assoc()) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['prioritet'];

      }

      if($_SESSION['role'] == 'admin') {
          header('location: admin.php');
      }else {
          header('location: index.php');
      }

    }else {
        array_push($errors, "Pogrešna username/password kombinacija");
      }
    }
}

?>
