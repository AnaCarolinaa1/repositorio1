<?php
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$op = $_POST["opcao"];

switch ($op) {
	case 1:
		$resultado = $n1 + $n2;
		echo "O resultado foi $resultado";
		break;

		case 2:
		$resultado = $n1 - $n2;
        echo "O resultado foi $resultado";
break;
        case 3: 
        $resultado = $n1 * $n2;
        echo "O resultado foi $resultado";
           
           break;
        case 4:

       $resultado = $n1 /$n2;
       echo "O resultado foi $resultado";
       break;
   
	


	default:
		echo "Opção inválida";
		break;
}

?>