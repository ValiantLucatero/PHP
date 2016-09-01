<?php
$ar=array(1,'uno','dos',5,10);
$i=0;
sort($ar,SORT_STRING);
foreach($ar as $i)
	echo $i.'<br/>';
$ar2=array(5,9,3,7,10,4,1);
rsort($ar);
var_dump($ar2);
$r=count($ar);
	echo'<br/>El # de elementos del arreglo es: '.$r;
?>