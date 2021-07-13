<?php

$nome = $_POST["nome"];
$salario = $_POST["salario"];
$op = $_POST["opcao"];

switch ($op) {
	case 1:
		if ($salario >=2000) {
			$inss = $salario * 0.11;
		}else{
			$inss = $salario * 0.09;
		}
		echo "o desconto foi de $inss  ";
		break;
	case 2: 
if ($salario >=1500) {
			$inss = $salario * 0.06;
		}else{
			$inss = $salario * 0.05;
		}
		echo "o desconto foi de $inss  ";
		break;
case 3:
$cargo = "";
		if ($salario >= 3000) {
			$cargo = "Acionista";
		}elseif(($salario <3000) &&($salario >=1000)){

             $cargo = "Gerente";
}else{
	$cargo = "vendedor";
}

		
		echo "Salario: $salario<br>";
		echo "Cargo: $cargo<br>";
	break;


	default:
		
		break;
}
?>