<?php
$numeroAulas = readline("Digite o número total de aulas");
$frequencia= [];

for($i =1; $i <= 20;$i++){
    $presencas = readline("digite o número de aulas frequenadas prlo aluno$i:");
    $percentual = ($presencas /$numeroAulas) * 100;
    $frequencia[$i] = $percentual;
}
echo "Percentual de frequênciados alunos: \n";
for($i =1; $i <=5; $i++){
    echo"Aluno $i: " . $frequencia[$i] . "%\n"; 
}

?>