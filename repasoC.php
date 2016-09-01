<?php
echo'	<html>
	<head><title>Repaso de C</title></head>
	<body>';
		$a=0;
		$b=0;
		$c=0;
		$a=rand(1,10);/*aleatorios*/
		$b=rand(1,10);
		echo 'Numero 1='.$a.'<br/>';/*"printf"*/
		echo 'Numero 2='.$b.'<br/>';
		$c=($a+$b)/2;/*operaciones*/
		if($c>6)
			echo 'La calificacion '.$c.' es aprobatoria';/*comparaciones con if*/
		else
			echo 'La calificacion '.$c.' es reprobatoria';
		echo '<br/>';
		if($a%2==0)
			echo 'El numero '.$a.' es par';/*Uso del "residuo"*/
		else
			echo 'El numero '.$a.' es impar';
		echo '<br/>';
		$a=0;
		for($a=0;$a<=10;$a++)/*lista de numeros con "for"*/
			echo $a.'<br/>';
		for($a=1;$a<11;$a++)
			for($b=0;$b<11;$b++)/*Tablas me multiplicar con un ciclo dentro de otro*/
				echo $a.'x'.$b.'='.$a*$b.'<br/>';
		$a=rand(1,4);
		if($a==1)
			echo 'Hola';
		elseif($a==2)
			echo 'Adios';/*estructura "elseif" para evitar "ifs" anidados*/
		elseif($a==3)
			echo 'Soy yo';
		else
			echo 'Me quiero ir';
		echo '<br/>';
		$a='fruta';
		switch($a)
		{
			case 'fruta':echo 'Sano';
			break;
			case 'chatarra':echo 'Malo';/*switch, no solo puede ser #, tambien char y cadenas*/
			break;
			case 'verdura':echo 'Bueno';
			break;
			default:echo 'Comida :3';
		}
echo'	</body>
	</html>';
?>