<?php
require ("functions_general.php");
  require ("../../../config_vp2019.php");
  require ("functions_user.php");
  $database = "if19_raimo_pin_1";
$id = null;
$userid = null;
$mydescription = null;
$bgcolor = null;
$txtcolor = null;
$picture = null;

if(isset($_POST["description"])){
	$mydescription = test_input($_POST["description"]);
}
if(isset($_POST["bgcolor"])){
	$bgcolor = test_input($_POST["bgcolor"]);
}
if(isset($_POST["txtcolor"])){
	$txtcolor = test_input($_POST["txtcolor"]);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Katselise veebi uue kasutaja loomine</title>
  </head>
  <body>
    <h1>Loo endale kasutajakonto</h1>
	<p>See leht on valminud TLÜ õppetöö raames ja ei oma mingisugust, mõtestatud või muul moel väärtuslikku sisu.</p>
	<hr>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <label>Minu kirjeldus</label><br>
	  <textarea rows="10" cols="80" name="description"><?php echo $mydescription; ?></textarea>
	  <br>
	  <label>Minu valitud taustavärv: </label><input name="bgcolor" type="color" value="<?php echo $mybgcolor; ?>"><br>
	  <label>Minu valitud tekstivärv: </label><input name="txtcolor" type="color" value="<?php echo $mytxtcolor; ?>"><br>
	  <input name="submitProfile" type="submit" value="Salvesta profiil">
</form>
</body>
</html>