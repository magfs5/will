<?php

//importa a classe do Animal

require_once 'Animal.php';
require_once 'Mamifero.php';
    



class Main {

    public static function run(){
        //estanciando o objeto da classe animal
        $animal1 = new Animal("Leão",5,"Amarelo");
        $animal2 = new Animal("caramelo",5,"caramelo");
        $animal1->comunicar();

        $mamifero1 = new Mamifero("baleia",103,"azul",0);
        $mamifero2 = new Mamifero("Gato",1,"preto",4);
        $mamifero1->comunicar();
            

        }

    }


Main::run();



?>