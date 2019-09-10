<?php
	$userName = "Raimo Pindus" ;
	$fullTimeNow = date("d.m.Y H:i:s");
	$hourNow = date("H");
	$partOfDay = "hägune aeg";

if ($hourNow < 8) {
	$partOfDay = "hommik";
	
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>
  <?php
  echo $userName;
  ?>
  Siin ma programmeerin veebi</title>

</head>
<body>
	<?php
	echo "<h1>" .$userName . ", veebiprogrammeerimine </h1>";
	
?>
  <h1 align="center"><p><font color="red" font size="15">Raimo Pindus, veebiprogrammeerimine</h1></font></p>
    <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu. Aga äkki sisaldab. Kes teab? ☺</p>
	<hr>
	<?php
		echo "<p>Lehe avamise hetkel oli aeg: " . $fullTimeNow . ", $partOfDay" . ".</p>";
	?>
	<h1 align="center"><img src="https://i0.wp.com/www.fluxfactory.org/wp-content/uploads/2014/05/youmadeit1.jpg" ></h1>
	<h1 align="center"><p><font color="green" font size="15"> Kui pildid ei tööta, siis proovi homme uuesti.</h1></font></p>
    <p>Kui ei viitsi siin passida, siis mine passi <a href="http://greeny.cs.tlu.ee/~rainehal/Veebiprogrammeerimine/02tund/myindex.php"> mujal </a> </p>
</script>	
</body>
</html>