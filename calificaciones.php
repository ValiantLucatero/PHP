<?php
$a1c1=5;
$a1c2=7;
$a1c3=7;
$a2c1=9;
$a2c2=6;
$a2c3=8;
$a3c1=9;
$a3c2=10;
$a3c3=9;

$ap1=($a1c1+$a1c2+$a1c3)/3;
$ap2=($a2c1+$a2c2+$a2c3)/3;
$ap3=($a3c1+$a3c2+$a3c3)/3;
/*
if($ap1>='9.5')
	$av1='Excelente';
elseif(9<$ap1>'9.5')
	$av1='Muy bien';
elseif(8<$ap1>9)
	$av1='Bien';
elseif(7<$ap1>8)
	$av1='Regular';
elseif(6<$ap1>7)
	$av1='Deficiente';
else($ap1<6)
	$av1='Mal';

if($ap2>='9.5')
	$av2='Excelente';
elseif(9<$ap2>'9.5')
	$av2='Muy bien';
elseif(8<$ap2>9)
	$av2='Bien';
elseif(7<$ap2>8)
	$av2='Regular';
elseif(6<$ap2>7)
	$av2='Deficiente';
else($ap2<6)
	$av2='Mal';

if($ap3>='9.5')
	$av3='Excelente';
elseif(9<$ap3>'9.5')
	$av3='Muy bien';
elseif(8<$ap3>9)
	$av3='Bien';
elseif(7<$ap3>8)
	$av3='Regular';
elseif(6<$ap3>7)
	$av3='Deficiente';
else($ap3<6)
	$av3='Mal';
*/
echo 'Alumno 1:<br/>	Promedio:'.$ap1.'<br/>	Valoracion:'.$av1.'<br/><br/>';
echo 'Alumno 2:<br/>	Promedio:'.$ap2.'<br/>	Valoracion:'.$av2.'<br/><br/>';
echo 'Alumno 3:<br/>	Promedio:'.$ap3.'<br/>	Valoracion:'.$av3;
?>