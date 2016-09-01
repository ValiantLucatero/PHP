<?php
$ar=array('uno','dos','tres','cuatro');
$ar2=array(6,8,3,15,9,7,1);
$ar3=array(5,'siete',13,'uno','dos',1532.2);
echo $ar[1];
for($x=0;$x<7;$x++)
	echo 'Elemento'.$x.'='.$ar2[$x];
var_dump($ar3);
$ar[]='cinco';
var_dump($ar);
$ar[1]='cinco';
?>