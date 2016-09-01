<?php
$cad='****%%%%%*****Hola*Mundo*******';
echo $cad.'<br/>';
$cad2=trim($cad,'* %');/* ltrim=izquierda rtrim=derecha trim=de los dos lados*/
echo $cad2.'<br/>';
$cad3='Esto es un ejemplo';
echo $cad3.'<br/>';
$cad4=substr($cad3,5,2);/*subcadenas*/
echo $cad4.'<br/>';
$arr2=explode(' ',$cad3);/*volver una cadena un arreglo*/
print_r($arr2);
echo'<br/>';
$arr3=array('uno','dos','tres','cuatro');
$cad5=implode(', ',$arr3);/*volver un arreglo una cadena*/
print_r($arr3);
echo'<br/>';
echo $cad5.'<br/>';
$n=substr_count($cad3,'es');/*cuenta cuantas veces esta algo en una cadena*/
echo $n.'<br/>';
$cad6=str_replace('es','ES',$cad3);/*reemplaza algo en una cadena*/
echo $cad3.'<br/>'.$cad6.'<br/>';
$cad7=str_ireplace('es','ES',$cad3);/*lo mismo pero ignora la mayuscula o minuscula*/
echo $cad7.'<br/>';
$i=strpos($cad3,'es');/*te dice en que posicion esta algo*/
echo $i.'<br/>';
$a=stripos($cad3,'es');/*lo mismo pero ignora Mm, solo cuenta la primera, le puedes agragar otro parametro que diga donde empezar a buscar*/
echo $a.'<br/>';
$b=strrpos($cad3,'es');/*te dice en que posicion esta algo, pero en reversa*/
echo $b.'<br/>';
$c=strpos($cad3,'es');/*lo mismo pero ignora Mm*/
echo $c.'<br/>';
?>