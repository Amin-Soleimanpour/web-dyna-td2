<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h2><a href="?message=hello"> hello</a>
		<a href="?message=bonjour">Bonjour</a>
		<a href="?message=bye-bye">Bye</a>
	</h2>	
	
		
	<?php
	echo "Message est:".$_GET["message"];
		?>
</body>
</html>