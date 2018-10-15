<?php
	$decimal = $_POST['caja_decimal'];

	$binario = decbin($decimal);
	
	echo "<h3> Conversión de números</h3>";
	echo "El número decimal es: " .$decimal ."<br>";
	echo "El número binario es: " .$binario ."<br>";
	echo "El complemento A1 del número binario es: ";
	
	function primer($binario, $c){
		return $binario{$c};
	}
	
	function complemento($binario){
		$contador = 0;
		$entrada;
		$uno;
		$cero;
		$comAU = "";
		for($i = 0; $i < strlen($binario); $i++){
			$entrada = primer($binario, $i);
			if($entrada == 1 ){
				$cero = 0;
				$comAU = $comAU. "0";
				//echo "$cero";
			}
			else{
				$uno = 1;
				$comAU = $comAU. "1";
				//echo "$uno";
			}
		}
		echo " $comAU";
		return $comAU;
	}
	complemento($binario);

	
	
?>