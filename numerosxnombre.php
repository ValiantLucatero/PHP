<?php
$a=0;
$i=0;
for($i=0;$i<6;$i++)
{
	$a=rand(0,10);
	switch($a)
	{
		case 1:echo 'Uno <br/>';
		break;
		case 2:echo 'Dos <br/>';
		break;
		case 3:echo 'Tres <br/>';
		break;
		case 4:echo 'Cuatro <br/>';
		break;
		case 5:echo 'Cinco <br/>';
		break;
		case 6:echo 'Seis <br/>';
		break;
		case 7:echo 'Siete <br/>';
		break;
		case 8:echo 'Ocho <br/>';
		break;
		case 9:echo 'Nueve <br/>';
		break;
		case 10:echo 'Diez <br/>';
	}
}
?>