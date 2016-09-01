<?php
$a=array('uno'=>1,'dos'=>2,'tres'=>4);
print_r($a);
echo'<br/>';
$b=array_change_key_case($a,CASE_UPPER);
print_r($b);
echo'<br/>';
$c=array_keys($a);
print_r($c);
echo'<br/>';
$d=array_key_exists('uno',$a);
if($d)
	echo 'existe';
else
	echo 'no existe';
echo'<br/>';
$e=in_array('2',$a,TRUE);
if($e)
	echo 'si esta';
else
	echo'no esta';
echo'<br/>';
$f=array_search(1,$a);
echo 'Esta en:'.$f;
echo'<br/>';
array_unshift($a,5,6,7);
print_r($a);
echo'<br/>';
array_shift($a);
print_r($a);
echo'<br/>';
array_push($a,8,13,9);
print_r($a);
echo'<br/>';
array_pop($a);
print_r($a);
echo'<br/>';
$caldi=array('part'=>20,'lab'=>20,'ex'=>30,'expo'=>30);
print_r($caldi);
echo'<br/>';
array_push($caldi, 'coment');
print_r($caldi);
echo'<br/>';
array_pop($caldi);
print_r($caldi);
echo'<br/>';
array_unshift($caldi,'No corazon');
print_r($caldi);
echo'<br/>';
array_shift($caldi);
print_r($caldi);
echo'<br/>';
$caldi2=array_slice($caldi,1,2);
print_r($caldi2);
echo'<br/>';
$caldi3=array_slice($caldi,-3,2,TRUE);
print_r($caldi3);
echo'<br/>';
$g=array(7,3,5,1,6,8,2,9);
print_r($g);
echo'<br/>';
$h=array_splice($g,3,2,'hola');
print_r($h);
echo'<br/>';
print_r($g);
echo'<br/>';
?>