<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EX2</title>

</head>
<body>
	<a href="?message=Rouge&size=12&couleur=red">Red</a>
	<a href="?message=Vertsize=29&couleur=green">Green</a>
	<a href="?message=Bleu&size=100&couleur=blue">Blue</a>

<?php
$size=$_GET['size']; 
$color=$_GET['couleur'];
$message=$_GET['message'];
$update=$_GET['update'];


if ($update == "+") {
$size=$size+2;
}
if ($update == "-") {
$size=$size-2;
}

if (isset($size) OR isset($color) OR isset($message))
{  
	if (isset($size) AND isset($color)) {
	 echo "<div style='font-size: {$size}px; color: {$color} ;'>Message de taille {$size}px en {$message}</div>";
}
  else
  {
  	$color=Black;
  	$size=12;
  	echo "<div style='font-size: {$size}px; color: {$color} ;'>Message de taille {$size}px en Noir</div>";
  }
}
else
{ 
	echo "Erreur";
}

 ?>
<form method="GET">
    <label for="message">Message : </label>
    <input type="text" value="" name="message" id="message">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <label for="couleur">Color : </label>
    <input type="text" value="" name="couleur" id="couleur">    
    <input type="submit" value="Valider">
    <input type="number" name="size" id="size" value="<?=$size?>">
    <input type="submit" name="update" value="+">
    <input type="submit" name="update" value="-">
</form>

</body>
</html>