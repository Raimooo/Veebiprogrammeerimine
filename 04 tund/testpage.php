<?php
	$userName = "Raimo Pindus" ;
	
	$photoDir = "../photos/";
	$photoTypes = ["image/jpeg" , "image/png"];
	$fullTimeNow = date("d.m.Y H:i:s");
	$hourNow = date("H");
	$partOfDay = "hägune aeg";

if ($hourNow < 8) {
	$partOfDay = "hommik";
}	
	
	$semesterStart = new DateTime("2019-9-2");
	$semesterEnd = new DateTime("2019-12-13");
	$semesterDuration = $semesterStart -> diff($semesterEnd);
	$today = new DateTime("now");
	$semesterElapsed = $semesterStart -> diff($today);
	//echo $semesterDuration
	//var_dump ($semesterDuration);
	//<p>Semester on täies hoos:
	//<meter min="0" max="112" value="16">13%</meter>
	//</p>
	$semesterInfoHTML = null;
	if($semesterElapsed -> format("%r%a") >= 0 ){
		$semesterInfoHTML = "<p>Semester on täies hoos:";
		$semesterInfoHTML .= '<meter min="0" max="' . $semesterDuration -> format("%r%a") .'" ';
		$semesterInfoHTML .= 'value="' .$semesterElapsed -> format("%r%a") .'" ';
		$semesterInfoHTML .= round($semesterElapsed -> format("%r%a") / $semesterDuration -> format("%r%a") * 100, 1) ."%";
		$semesterInfoHTML .= "</meter> </p>";
	}
	//foto näitamine lehel
	$fileList = array_slice(scandir($photoDir), 2);
	//var_dump($fileList);
	$photoList = [];
	foreach ($fileList as $file){
		$fileInfo = getImagesize($photoDir .$file);
		if (in_array($fileInfo["mime"], $photoTypes)){
			array_push($photoList, $file);
		}
	}
	//$photoList = ["	tlu_terra_600x400_1.jpg","	tlu_terra_600x400_2.jpg",	"tlu_terra_600x400_3.jpg"];	//array ehk massiiv
	//var_dump($photoList);
	$photoCount = count($photoList);
	//echo $photoCount;
	$photoNum = mt_rand(0, $photoCount -1);
	$randomImgHTML = '<img src="' .$photoDir .$photoList[$photoNum] . '"alt="Juhuslik foto">';
?>
	<?php
	require("header.php");
	echo "<h1>" .$userName . ", veebiprogrammeerimine </h1>";
	
?>
  <h1 align="center"><p><font color="red" font size="15">Raimo Pindus, veebiprogrammeerimine</h1></font></p>
    <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu. Aga äkki sisaldab. Kes teab? ☺</p>
	<?php
	echo $semesterInfoHTML;
	?>
	<hr>
	
	<?php
		echo "<p>Lehe avamise hetkel oli aeg: " . $fullTimeNow . ", $partOfDay" . ".</p>";
	?>
	<h1 align="center"><img src="https://i0.wp.com/www.fluxfactory.org/wp-content/uploads/2014/05/youmadeit1.jpg" ></h1>
	<h1 align="center"><p><font color="blue" font size="15"> Kui pildid ei tööta, siis proovi homme uuesti.</h1></font></p>
    <p>Kui ei viitsi siin passida, siis mine passi <a href="http://greeny.cs.tlu.ee/~rainehal/Veebiprogrammeerimine/02tund/myindex.php"> mujal </a> </p>
</script>	
	<?php
	echo $randomImgHTML;
	?>
</body>
</html>