<?php
// Tipos de dados em variáveis
$nome = "Maria"; //string
 $idade = 18 ; 
 $altura = 1.62; //number, decimal
 $matriculado = false; //boolean
 $materiais = array("Matemática", "História","Física"); //Array

// echo "\n Nome: " . $nome;
// echo "\n Idade: "  . $idade;
// echo "\n Altura: " . $altura;  "m";
// echo "\n Matriculado: " . ($matriculado ? "Sim":"Não");
// echo "\n Materiais:" . implode(", ",$materiais);


//estruturas condicionais - if, else, else if
// se a nota for a partir de 6, ele passou de série
// $notaFinal= 3;
// if($notaFinal >= 6) {
//     echo "Aluno Aprovado!";
// } else if ($notaFinal <6){
//     echo "Aluno Reprovado!";
// } else{
//     "Nota Inválida!";
// }
// >= - Maior e igual
// < = - menor e igual
// > -Maior
// < -Menor
// == - igual
// ! - Diferente 

// Operadores Lógicos
// and(e) - && -true true = true
// or(ou) - || true e false = true
// //Para a aluna ser aprovada, precisa que a nota seja a partir de 60 e que a frequencia seja a partir de 75%.
// $notaAlunaFinal = 70;
// $frequenciaAluna = 85; //percentual de presença
// if($notaAlunaFinal >= 60 && $frequenciaAluna >=75){
//     echo "Aluna aprovada!";
// }else{
//     echo "Aluna Reprovada!";
// }
// //Para a aluna ser aprovada, precisa que a nota seja a partir de 60 e que a frequencia seja a partir de 75%.
 $notaAlunaFinal = 70;
 $frequenciaAluna = 85; //percentual de presença
if($notaAlunaFinal = 60 || $frequenciaAluna >= 75){
    echo "Aluna Aprovada! ";
}

 ?>
