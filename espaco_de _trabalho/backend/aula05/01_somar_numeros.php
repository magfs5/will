<?php
//Escreva um programa que peça para o usuário digitar números. Some todos os números inseridos e para a execução do while quando o usuário digitar 0. Em seguida, exiba o 
//total da soma. 
$soma = 0;
while(true){
    $numero = readline("digite um numero (0 para sair):");

    if($numero ==0){
        break; //quebra, sai do loop while;
    }
    $soma =$soma + $numero;

}
echo "A soma total é:" . $soma . "\n";