<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
</head>

<body>


<?php 

  if (!isset($_GET["Message"])){
	  echo "Bouh";
  }
  else{ 
	  $Message=$_GET["Message"];
  }

  echo "<div style='font-size: {$Taille}px; color:{$Couleur}; message:{$Message}'>$Message</div>";
?>
	
		
<form method="GET">
  <label for="Message">Message : </label>
  <input type="text" name="Message" value="" id="Message">
  
  <label for="Taille">Taille : </label>
  <input type="number" value="" name="Taille" id="Message">
  
  <label for="Couleur">Couleur : </label>
  <input type="text" name="Couleur" value="" id="Message">
  <input type="submit" value="Valider">
</form>

</body>

</html>
