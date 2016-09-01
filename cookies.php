<?php
/*Un dato que el servidor guarda en el cliente*/
setcookie('micookie',20,time()+86000,'/');/*numeros negativos borran la cookie*/
if(isset($_COOKIE['micookie']))
	echo $_COOKIE['micookie'];
else
	echo 'no existe';

echo'La fecha de hoy es: '.date('d/m/y');
$dentrodedosdias=time()+3600*24*2;
echo'La fecha dentro de dos dias sera: '.date('d/m/y',$dentrodedosdias);


?>