<?php
$i=0;
echo '<html>
        <head>
		<title>Hola</title>
	</head>
	<body style="background-color:cyan;">
		<h1>Hola mundo</h1>
		<table border-top-width:thin>';
		for($i=0;$i<11;$i++)
			echo '<tr><td>'.$i.'</td></tr>';
		echo '</table>
	</body>
</html>';
?>