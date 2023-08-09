<?php
$sal1 = 5000;
$sal2 = 2500;
$taxaAumento1 = 0.10;  
$taxaAumento2 = 0.20;  
$anos = 0;

while ($sal1 >= $sal2) {
    $sal1 += $sal1 * $taxaAumento1; 
    $sal2 += $sal2 * $taxaAumento2; 
    $anos++;
}

echo "Seu colega irá ganhar mais que você em $anos anos.";
?>