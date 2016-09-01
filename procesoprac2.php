<?php
$nombre=$_POST['nom'];
$tel=$_POST['tel'];
$grp=$_POST['grp'];
$permitidos='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$a=0;
echo'		<head><title>Respuesta</title></head>
		<body>';
			$a=strlength($nombre);
			for($i=1;$i<=$a;$i++);
			{
				$b=strpos($nombre,$permitidos,$i);
				if($b=0)
					echo'El nombre es invalido';
			}
			echo strtoupper($nombre).'<br/>';
			/*verificar que solo son numeros con otra cadena*/
			for($i=2;$i<9;$i+=2)
			{
				$a=substr($tel,$i,2); 
				echo$a.'-';
			}
			/*verificar que solo sean numeros y la ultima numero o letra e imprimirlo*/
			
echo'		</body>
     </html>';
?>