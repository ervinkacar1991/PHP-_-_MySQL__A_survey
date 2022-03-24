<?php

include 'conn.php';


	session_destroy();
    unset($_SESSION['role']);
	unset($_SESSION['username']);
	header("location: index.php");

  ?>
