<?php
$colores=array('naranja','rojo','azul','amarillo');
$sexo=array('Masculino','Femenino');
$deportes=array('Natacion','Futbol','Basquetbol','Tenis');
echo'	<html>
		<head><title>Encuesta</title></head>
		<body>
			Nombre:<input type="text" name="nom" size="10" maxlength="45"/><br/>
			Sexo:<br/><input type="radio" name="sex" value="1"/>'.$sexo[0].'<br/>
			     <input type="radio" name="sex" value="0"/>'.$sexo[1].'<br/>
			Color preferido:<select>
						<option>'.$colores[0].'</option>
						<option>'.$colores[1].'</option>
						<option>'.$colores[2].'</option>
						<option>'.$colores[3].'</option>
					</select><br/>
			Deporte:<br/><input type="checkbox" name="nat" value="si"/>'.$deportes[0].'<br/>
				<input type="checkbox" name="fut" value="si"/>'.$deportes[1].'<br/>
				<input type="checkbox" name="bsq" value="si"/>'.$deportes[2].'<br/>
				<input type="checkbox" name="ten" value="si"/>'.$deportes[3].'<br/>
		</body>
	</html>';
?>