<?php
  require("../../../config_vp2019.php");
  require("functions_main.php");
  require("functions_user.php");
  require("functions_pic.php");
  $database = "if19_raimo_pin_1";
    
  //kui pole sisseloginud
  if(!isset($_SESSION["userID"])){
	  header("Location: page.php");
	  exit();
  }
  
  //väljalogimine
  if(isset($_GET["logout"])){
	  session_destroy();
	  header("Location: page.php");
	  exit();
  }
  
  $userName = $_SESSION["userFirstname"] ." " .$_SESSION["userLastname"];
  $picid = null;
  $notice = null;
  
  if(isset($_GET["photoid"])){
	  //echo $_GET["photoid"];
	  $picid = $_GET["photoid"];
	  $userPicHTML = readuserPicToEdit($_GET["photoid"]);
  } elseif(isset($_POST["picid"])){
	  $picid = $_POST["picid"];
	$userPicHTML = readuserPicToEdit($_POST["picid"]);
  } else {
	  $userPicHTML = null;
  }
  
  //$publicThumbsHTML = readAllPublicPics(2);
  //<link rel="stylesheet" type="text/css" href="style/modal.css">
  
  require("header.php");
?>


<body>
  <?php
    echo "<h1>" .$userName ." koolitöö leht</h1>";
  ?>
  <p>See leht on loodud koolis õppetöö raames
  ja ei sisalda tõsiseltvõetavat sisu!</p>
  <hr>
  <p><a href="?logout=1">Logi välja!</a> | Tagasi <a href="home.php">avalehele</a></p>
  <hr>
  <h2>Minu pildi pildi info muutmine või pildi kustutamine</h2>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<?php
		if(!empty($userPicHTML)){
			echo $userPicHTML;
			echo '<input name="picid" type="hidden" value="' .$picid .'">';
			echo "<br>";
			echo '<input name="changeUserPicInfo" type="submit" value="Salvesta muutus!"><span><?php echo $notice; ?></span>';
		} else {
			echo "<p>Pildi laadimisel tekkis viga!</p> \n";
		}
	?>
  </form>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<?php
		if(!empty($userPicHTML)){
			echo '<input name="picid" type="hidden" value="' .$picid .'">';
			echo '<input name="deleteUserPic" type="submit" value="Kustuta pilt!"><span><?php echo $notice; ?></span>';
		}
	?>
  </form>
  	    
  <hr>
</body>
</html>





