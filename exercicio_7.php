<?php
$numMes = 8;

$meses = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Mar�o",
    
    
4 => "Abril",
    
    
5 => "Maio",
    
    
6 => "Junho",
    7 => "Julho",
    
    
8 => "Agosto",
    9 => "Setembro",
    
    
10 => "Outubro",
    
   
11 => "Novembro",
    12 => "Dezembro"
);

if ($numMes >= 1 && $numMes <= 12) {
    echo "O m�s correspondente ao n�mero $numMes �: " . $meses[$numMes];
} else {
    echo "M�s inv�lido";
}
?>