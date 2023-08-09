<?php
function calcularIMC($peso, $altura) {
    
   
$imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) {
        
       
return "Magreza";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

$altura = 1.75;  // Substitua pela altura da pessoa em metros

$
$peso = 70;      // Substitua pelo peso da pessoa em kg

$categoria = calcularIMC($peso, $altura);
echo "Categoria do IMC: " . $categoria;
?>