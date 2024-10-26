<?php

//Função sem parâmetros
// function apresentar (){
//     echo "Olá, boa noite!";
// }
//  Chamando - (invocando)
// apresentar();
// apresentar();
// apresentar();

// Função com parâmetros
// function apresentar ($nome) {//Nome => é um parâmetro
//     echo "Olá, $nome boa noite! \n";
// }

// apresentar("João");  //João é um argumento
// apresentar("Alice");
// apresentar("Ana");
// apresentar("Pedro");



// Função com parâmetros
function apresentar ($nome,$idade,$cidade) {//Nome => é um parâmetro
    echo "Olá, $nome boa noite! você tem $idade anos,e mora em $cidade \n";
}

apresentar("João", 23,"rio de janeiro");  
apresentar("Alice",22," manaus");
apresentar("Ana",20,"são paulo");
apresentar("Pedro", 19, "Belém");









?>