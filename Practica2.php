<?php
echo'<html>
<head></head>
<body>
	<form method="post" action="procesoprac2.php">
		Nombre:<input type="text" name="nom" size="21" maxlength="45"/><br/>
		Telefono:<input type="text" name="tel" size="6" maxlength="10"/><br/>
		Grupo:<input type="text" name="grp" size="2" maxlength="4"/><br/>
		<input type="submit" value="enviar formulario"/>
		<input type="reset" value="borrar"/>
	</form>
</body>
</html>';
?>