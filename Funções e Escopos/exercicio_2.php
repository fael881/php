<?php
function alunoAprovado($n1, $n2) {
    $somaNotas = $n1 + $n2;
    
    if ($somaNotas >= 19 && $n1 > 7 && $n2 > 7) {
        return true;
    } else {
        return false;
    }
}

$nota1 = 8;
$nota2 = 9;

if (alunoAprovado($nota1, $nota2)) {
    
   
echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado.";
}
?>