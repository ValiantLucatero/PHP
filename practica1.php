<?php
$i=0;
$a=0;
echo '<html>
        <head>
		<title>Practica 1</title>
	<style>
		.tipo1
		{
			background-color:green;
			border:10px dotted blue;
		}
		.tipo2
		{
			background-color:red;
			border:20px dashed green;
		}
		.tipo3
		{
			background-color:blue;
			border:30px solid red;
		}
		.tipo4
		{
			background-color:yellow;
			border:40px double cyan;
		}
		.tipo5
		{
			background-color:cyan;
			border:50px ridge black;
		}
	</style>
	</head>
	<body>';
		for($i=0;$i<15;$i++)
		{
			$a=rand(1,5);
			echo '<div class=tipo'.$a.'>Texto'.$a.'</div>';
		}
	echo '</body>
</html>';
?>