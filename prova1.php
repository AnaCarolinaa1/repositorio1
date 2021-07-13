<?php
$op = $_POST["opcao"];


switch ($op) {
	case 1:
	echo "Ver uma repetição - FOR<br>";
		
		for ($i=100; $i>=0; $i--) {
	echo "$i <br>";
		}
		break;
	
	case 2:
	echo "Ver uma repetição - WHILE<br>";
		
		$i=1;
		while ( $i<= 500) {
			if ($i %2 == 0) {
				echo "$i<br>";
			}
		$i++;
		}
		break;
	}
?>