<?php 
include 'conn.php';


$uradjen = array();
$sql="SELECT  id_user, username, datum, max(anketa1) as a1,max(anketa2) as a2,max(anketa3) as a3 
FROM    zavrseni
group by id_user";
$ticket = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($ticket)){
	$uradjen[] = $row; 
}

//pametno zdravstvo - anketa1
//pametni transport - anketa2
//zastita zivotne sredine - anketa3
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Web sajt </title>
<link rel="stylesheet" type="text/css" href="cssstyle.css">

<style>
table, th, td {
 border: 1px solid white;	
 width:500px;
 height:20px;
 color: white;
 margin:auto;
	
}

</style>
</head>
<body>
<div id="container">
 <div id="header">
 <img src="Slike/logo13..jpg">
 </div>
  <div id="navigation">
  <ul>
 <li><a  href="index.php">POČETNA</a></li>
  <li><a href="O nama.php">O NAMA</a></li>
	</div>

    <center>
    <table>
<tr>
    <th>USERNAME</th>
    <th>ANKETE URAĐENE</th>
    <th>Datum i vreme</th> 
</tr>
<?php for($i=0; $i<sizeof($uradjen); $i++){ ?>
<tr>
    <td><?php echo $uradjen[$i]["username"]; ?></td>
    <td><?php if($uradjen[$i]["a1"] == "1"){
        echo strtoupper("pametno zdravstvo <br>");
    }
    if($uradjen[$i]["a2"] == "1"){
        echo strtoupper(" pametni transport <br>");
    } 
    if($uradjen[$i]["a3"] == "1"){
        echo " ZAŠTITA ŽIVOTNE SREDINE";
    }?></td> 
    <td><?php echo date("H:i d-m-Y", strtotime($uradjen[$i]["datum"])); ?></td>
</tr>
<?php } ?>
    </table>
    </center>

    <div id="footer">
		 <br>copyright © 2019 Ervin Kacar.
	</div>
	<div id="vrh">
	 <a href="#header"><img src="Slike/vrh.png"></a>
	</div>
</div>


	</div>
	</body>
</html>