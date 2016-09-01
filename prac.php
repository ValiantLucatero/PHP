<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Coloritos</title>
		</head>
		<body>
			<form method="POST" action="cuadros.php">
				Color:<input type="color" name="color"/><br/>
				N&uacute;mero:<input type="range" min="1" max="5" name="numero"/><br/>
				<input type="submit" value="Enviar"/>
			</form>
		</body>
	</html>';
?>