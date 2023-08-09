<?php
$vetor1 = [];
$vetor2 = [];
$vetorSoma = [];

for ($i = 0; $i < 10; $i++) {
    $vetor1[] = rand(1, 100);
    $vetor2[] = rand(1, 100);
    $vetorSoma[] = $vetor1[$i] + $vetor2[$i];
}

echo "Vetor 1: ";
for ($i = 0; $i < 10; $i++) {
    
   
echo $vetor1[$i] . " ";
}
echo "<br>";

echo "Vetor 2: ";
for ($i = 0; $i < 10; $i++) {
    
   
echo $vetor2[$i] . " ";
}
echo "<br>";

echo "Vetor Soma: ";
for ($i = 0; $i < 10; $i++) {
    echo $vetorSoma[$i] . " ";
    if ($i < 9) {
        echo ", ";
    }
}

   
?>