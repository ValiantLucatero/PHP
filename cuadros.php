<?php
if($_POST['numero']==1)
	$a=$_POST['color'];
elseif($_POST['numero']==2)
	$b=$_POST['color'];
elseif($_POST['numero']==3)
	$c=$_POST['color'];
elseif($_POST['numero']==4)
	$d=$_POST['color'];
elseif($_POST['numero']==5)
	$e=$_POST['color'];
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Cuadritos</title>
			<style>
		.tipo1
		{
			background-color:'.$a.';
		}
		.tipo2
		{
			background-color:'.$b.';
		}
		.tipo3
		{
			background-color:'.$c.';
		}
		.tipo4
		{
			background-color:'.$d.';
		}
		.tipo5
		{
			background-color:'.$e.';
		}
			</style>
		</head>
		<body>
			<div class=tipo1>1</div><br/>
			<div class=tipo2>2</div><br/>
			<div class=tipo3>3</div><br/>
			<div class=tipo4>4</div><br/>
			<div class=tipo5>5</div><br/>
		</body>
	</html>';