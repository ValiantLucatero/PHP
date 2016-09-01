<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Archivos</title>
		</head>
		<body>
			<form method="POST" action="archivos.php">
				<select name="nom">';
				for($i=1;$i<5;$i++)
					echo '<option value="archivo'.$i.'.txt">archivo'.$i.'.txt</option>';
echo'				</select><br/>
				<input type="submit" value="buscar"/>
			</form>';
			if(isset($_POST['nom']))
			{
				$nombre=$_POST['nom'];
				$arch=fopen($nombre,'r');
				while(!feof($arch))
				{
					$a=fgetc($arch);
					echo $a;
				}
				fclose($arch);
			}
echo'		</body>
	</html>';
?>