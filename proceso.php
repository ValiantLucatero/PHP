<?php
$nom=$_POST['nom'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
if($sexo=="M")
	$sex="hombre";
else
	if($sexo="F")
	$sex="mujer";
$colores=$_POST['col'];
$deportes=$_POST['dep'];
$ano=2016-$edad;
echo'<html>
		<head><title>Respuesta</title></head>
		<body>
			Hola '.$nom.'<br/>
			Tienes '.$edad.' anios y naciste en '.$ano.'<br/>
			Eres '.$sex.'<br/>
			Tus colores favoritos son:';
			foreach($colores as $a)
				echo $a.', ';
echo'			Tus deportes favoritos son:';
			foreach($deportes as $b)
				echo $b.', ';
echo'		</body>
     </html>';
?>