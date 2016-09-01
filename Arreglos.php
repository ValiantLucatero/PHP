<?php
$datos=array('Nombre','Grupo','Sexo','Promedio','Direccion');
echo'<html>
	<head>
		<style>
			table{
				border:10px solid purple;
				border-spacing:10px;
				border-collapse:separate;
				empty-cells:show;
				caption-side:bottom;
				background-color:green;
			     }
			th{
				background-color:yellow;
			  }
		</style>
	</head>
	<body>
		<table>
			<caption>Datos</caption>
			<tr>';
				for($i=0;$i<5;$i++)
					echo'<th>'.$datos[$i].'</th>';
echo'			</tr>';

for($i=0;$i<11;$i++)
{
	if($i%2==0)
		echo'<tr style="background-color:red"><td><pre>		</pre></td><td></td><td></td><td></td><td></td></tr>';
	else
		echo'<tr style="background-color:blue"><td><pre>	</pre></td><td></td><td></td><td></td><td></td></tr>';
}


echo'		</table>
	</body>
</html>';
?>