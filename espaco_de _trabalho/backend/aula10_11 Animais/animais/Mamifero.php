<?php

//. Na classe [Mamifero], incluir uma característica para receber a quantidade de patas.
//. Incluir um construct que recebe tudo que o Animal faz, além da quantidade de patas.

require_once 'Animal.php';

class Mamifero extends Animal{
    //atributo exclusivo da classe Mamifero.
    protected $pata;

    //Método constructor que inclui os atributos do Animal e Mamifero
    public function __construct($nome,$idade,$cor,$pata){
        parent::__construct($nome, $idade, $cor);
        $this->pata = $pata;
    }
    
    //Metodo exclusivo da classe Animal
    public function comunicar(){
        echo "Mamifero fazendo barulho\n";

    }
    
}








?>