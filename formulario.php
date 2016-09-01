<?php
$colores=array('naranja','rojo','azul','amarillo');
$deportes=array('Natacion','Futbol','Basquetbol','Tenis');
echo'	<html>
		<head><title>Formulario</title></head>
		<body>
			<form method="POST" action="proceso.php">
				Nombre:<input type="text" name="nom"/><br/>
				Edad:
				<select name="edad">';
				for($i=1;$i<101;$i++)
					echo '<option value="'.$i.'">'.$i.'</option>';
echo'				</select><br/>
				Sexo:<br/><input type="radio" name="sexo" value="M"/>Masculino<br/>
		     			  <input type="radio" name="sexo" value="F"/>Femenino<br/>
				Colores:<br/>';
				foreach($colores as $a)
					echo '<input type="checkbox" name="col" value="'.$a.'"/>'.$a.'<br/>';
echo'				Deportes:<br/>';
				foreach($deportes as $b)
					echo '<input type="checkbox" name="dep" value="'.$b.'"/>'.$b.'<br/>';
echo'				<input type="submit" value="enviar formulario"/> <input type="reset" value="borrar"/>
			</form>
		</body>
	</html>';
?>