<?php

$vetor = array();
for ($i = 0; $i < 5; $i++) {
    $vetor[] = rand(0, 10);
}

$menorElemento = $vetor[0];
$posicaoMenor = 0;

for ($i = 1; $i < count($vetor); $i++) {
    
if ($vetor[$i] < $menorElemento) {
        
$menorElemento = $vetor[$i];
        $posicaoMenor = $i;
    }
}

echo "Vetor: " . implode(", ", $vetor) . "<br>";
echo "O menor elemento щ $menorElemento e estс na posiчуo $posicaoMenor do vetor.";
?>