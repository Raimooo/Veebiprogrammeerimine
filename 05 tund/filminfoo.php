<?php
	require ("../../../config_vp2019.php");
	require("functions_film.php");
	$userName = "Raimo Pindus";
	$database = "if19_raimo_pin_1";
	
	
	
	$filmInfoHTML = readAllFilms();
	require("header.php");
	echo "<h1>" .$userName .", veebiprogrammeerimine</h1>";
?>
<p> See veebileht on loodud õppetöö käigus </p>
<hr>
<h2>Eesti filmid:</h2>
<?php
echo $filmInfoHTML
?>
<p>praegu meie andmebaasis on järgmised filmid</p>
