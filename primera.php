<?php
include 'segunda.php';
echo 'a='.$a.'<br/>';
echo 'b='.$b.'<br/>';
$a++;
$b++;
echo 'a='.$a.'<br/>';
echo 'b='.$b.'<br/>';
saludo(); /*puedes crear tus propias bibliotecas!!!, pero no debes mezclarlas con los archivos de variables*/
include 'segunda.php';/*puedes incluir mas de una vez un archivo, esto lo reinicia*/
echo 'a='.$a.'<br/>';
echo 'b='.$b.'<br/>';
/*hay include e include_once, es obvio que el 1ero es para variables y el 2do bibliotecas
tienen a require y require_once la diferencia es que si no encuentra el archivo se detiene, a diferencia de include que se sigue ejecutando*/
?>