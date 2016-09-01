<?php
$a=array('Nombre'=>'Andres','Grupo'=>513,'Sexo'=>'M','Promedio'=>9.6);
var_dump($a);
$b=array(5,15,8,7);
for($y=0;$y<=3;$y++)
	echo'Elemento '.$y.' es:'.$b[$y].'<br/>';
foreach($b as $y)
	echo'Elemento es:'.$y.'<br/>';
foreach($a as $i=>$y)
	echo 'Elemento '.$i.' es:'.$y.'<br/>';
$c=array($a,$b);
?>