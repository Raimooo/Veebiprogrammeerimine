<?php
	require("../../../config_vp2019.php");
	//echo $serverHost;
	$userName = "Raimo Pindus";
	$database = "if19_raimo_pin_1";
	//loeme andmebaasist filmide infot
	//loome andmebaasiühenduse ($mysqli  $conn)
	$conn = new mysqli ($serverHost, $serverUsername, $serverPassword, $database);
	//valmistan ette päringu
	$stmt = $conn -> prepare("SELECT pealkiri FROM file");
	echo $conn -> error;
	$stmt -> bind_result($filmTitle);
	require("header.php");
	echo "<h1>" .$userName .", veebiprogrammeerimine</h1>";
?>
	<p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu! </p>
	<hr>
	<h2>Eesti filmid </h2>
	<p>Praegu meie andmebaasis on järgmised filmid: </p>
	<?php
	?>
</body>
</html>