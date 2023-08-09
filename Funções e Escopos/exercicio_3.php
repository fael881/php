<?php
function calcularSalarioReajustado($salario) {
    if ($salario <= 3000) {
        $reajuste = $salario * 0.5;
    } else {
        $reajuste = $salario * 0.3;
    }
    
    $salarioReajustado = $salario + $reajuste;
    
    echo "Sal�rio original: R$ " . number_format($salario, 2, ',', '.') . "<br>";
    echo "Sal�rio reajustado: R$ " . number_format($salarioReajustado, 2, ',', '.');
}

$salarioInicial = 2500;

calcularSalarioReajustado($salarioInicial);
?>
