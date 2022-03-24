<?php
include 'conn.php';
header("Content-Type: text/html; charset=utf-8");

if(isset($_SESSION['id'])){
$uradjen = array();
$sql="SELECT * FROM zavrseni WHERE id_user=".$_SESSION['id']." ";
$ticket = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($ticket)){
	$uradjen[] = $row; 
}


/*if(sizeof($uradjen) > 0){
	if($uradjen[0]["anketa2"] == "1" ){
		header("Location: index.php");
	}
}
*/
}

if(isset($_POST['kraj'])){
	$_SESSION['anketa'] = array(
		"zavrsena" => 1,
		"poena" => 4
	);

	$sql = "INSERT INTO zavrseni(id, id_user, username, ostvarenopoena, anketa, datum) VALUES(DEFAULT, ".$_SESSION['id'].", '".$_SESSION['username']."', 4, 0, ".$_SESSION['anketa']['zavrsena'].", 0, CURRENT_TIMESTAMP)";
	mysqli_query($db, $sql);

	$sql1 = "INSERT INTO odgovori VALUES(DEFAULT, ".$_SESSION['id'].", '".$_SESSION['username']."', 'anketa', '".$_POST['p1']."', '".$_POST['p2']."', '".$_POST['p3']."', '".implode(", ",$_POST['p4'])."', '".$_POST['p5']."', '".$_POST['p6']."', '".$_POST['p7']."', '".$_POST['p8']."', '".$_POST['p9']."', '".$_POST['p10']."', '".$_POST['p11']."', '".$_POST['p12']."', '".$_POST['p13']."' )";
	mysqli_query($db, $sql1);

	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
	font-family: 'Lato', sans-serif;
	 background-image: url("Slike/pozadina.jpg");
  background-repeat: no;
}



#quiz {
	margin-right: 450;
	margin-left: 480px;
	background: #8fbec9;
	padding: 10px 20px 10px 20px;
	width: 500px;
	float: left;

}

input {
	margin-bottom: 20px;
	display: block;
}

#textbox {
	height: 25px;
	font-size: 16px;
	border-radius: 5px;
	border: none;
	padding-left: 5px;
}


#button {
	background: #595b5c;
	border: none;
	border-radius: 5px;
	padding: 10px;
	color: white;
	font-size: 16px;
	transition-duration: .5s;
	margin-top: 15px;
}



#button:hover {
	background: #505152;
	border: 0px;
	padding:18px;
	transition: background 0.8s, border 1s, padding 1s;
}


#mc {
	display: inline;
} 
a{
	
color: black;
}
</style>

</head>


<body>
<center><h1>ZDRAVA ISHRANA</h1></center>


<form id = "quiz" name = "quiz" action="" method="post">
<?php
if(isset($_SESSION["username"])){
$query = "SELECT * FROM pitanja1";
  	$result=mysqli_query($db, $query);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($row['id'] == 1)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input id = "textbox" type = "text" name = "p1" required>';
		}
		if($row['id'] == 2)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input type = "radio" id = "mc" name = "p2" value = "'.$row["prviodgovor"].'" > '.$row["prviodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p2" value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p2" value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p2" value = "'.$row["cetvrtiodgovor"].'"> '.$row["cetvrtiodgovor"].'<br>';
		}
		if($row['id'] == 3)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<select name= "p3">';
			echo '<option value = "'.$row["prviodgovor"].'"> '.$row["prviodgovor"].'</option>';
			echo '<option value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'</option>';
			echo '<option value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'</option>';
			echo '<option value = "'.$row["cetvrtiodgovor"].'">'.$row["cetvrtiodgovor"].'</option>'; 
			echo '</select>';
		}
		if($row['id']  == 4)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input type = "checkbox" id = "mc" name = "p4[]" value = "'.$row["prviodgovor"].'"> '.$row["prviodgovor"].'<br>';
			echo '<input type = "checkbox" id = "mc" name = "p4[]" value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'<br>';
			echo '<input type = "checkbox" id = "mc" name = "p4[]" value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'<br>';
			echo '<input type = "checkbox" id = "mc" name = "p4[]" value = "'.$row["cetvrtiodgovor"].'"> '.$row["cetvrtiodgovor"].'<br>';
		}
		if($row['id']  == 5)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<textarea name = "p5" rows="3" cols="40" required> </textarea>';
		}
		if($row['id'] == 6)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input id = "textbox" type = "text" name = "p6" required>';
		}
		if($row['id']  == 7 )
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input type = "radio" id = "mc" name = "p7" value = "'.$row["prviodgovor"].'"> '.$row["prviodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p7" value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p7" value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p7" value = "'.$row["cetvrtiodgovor"].'"> '.$row["cetvrtiodgovor"].'<br>';
		}
		if($row['id'] == 8)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<select name= "p8">';
			echo '<option value = "'.$row["prviodgovor"].'"> '.$row["prviodgovor"].'</option>';
			echo '<option value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'</option>';
			echo '<option value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'</option>';
			echo '<option value = "'.$row["cetvrtiodgovor"].'">'.$row["cetvrtiodgovor"].'</option>'; 
			echo '</select>';
		}
        if($row['id'] == 9)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input type = "checkbox" id = "mc" name = "p9[]" value = "'.$row["prviodgovor"].'"> '.$row["prviodgovor"].'<br>';
			echo '<input type = "checkbox" id = "mc" name = "p9[]" value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'<br>';
			echo '<input type = "checkbox" id = "mc" name = "p9[]" value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'<br>';
			echo '<input type = "checkbox" id = "mc" name = "p9[]" value = "'.$row["cetvrtiodgovor"].'"> '.$row["cetvrtiodgovor"].'<br>';
		}
		if($row['id'] == 10 )
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
		}
		if($row['id'] == 11)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input id = "textbox" type = "text" name = "p10">';
		}
		if($row['id'] == 12)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input type = "radio" id = "mc" name = "p11[]" value = "'.$row["prviodgovor"].'"> '.$row["prviodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p11[]" value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p11[]" value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p11[]" value = "'.$row["cetvrtiodgovor"].'"> '.$row["cetvrtiodgovor"].'<br>';
		}
		
		if($row['id'] == 13)
		{
			echo '<p class = "questions">'.$row['tekst'].'</p>';
			echo '<input type = "radio" id = "mc" name = "p14" value = "'.$row["prviodgovor"].'"> '.$row["prviodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p14" value = "'.$row["drugiodgovor"].'"> '.$row["drugiodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p14" value = "'.$row["treciodgovor"].'"> '.$row["treciodgovor"].'<br>';
			echo '<input type = "radio" id = "mc" name = "p14" value = "'.$row["cetvrtiodgovor"].'"> '.$row["cetvrtiodgovor"].'<br>';
		}
	
		
    }
} else {
    echo "Nema pitanja u bazi";
}
}
else
{
	echo 'Molimo vas da se ulogujete da biste radili kviz <a href="login.php">Loguj se </a>';
}

?>
<input id = "button" type = "submit" value = "Kraj!" name="kraj" />
<a href="index.php">Početna</a>


</form>

</html>

</body>
