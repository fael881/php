<?php
function somarValores($valor1, $valor2) {
    
   
$soma = $valor1 + $valor2;
    
   
return $soma;
}

$valor1 = 4;
$valor2 = 0;

$resultado = somarValores($valor1, $valor2);
echo "Resultado da soma: " . $resultado;
?>