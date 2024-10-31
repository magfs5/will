<?php



// 3. Na classe Animal, incluir as seguintes características:
// nome, idade, cor.
// 4. E um médoto chamado comunicar, que quando invocado irá exibir a mensagem: Fazendo barulho.
// 5. Criar o construct dessa classe Animal.
// 6. Colocar  os atributos como protected.

//class-> utilizado para indicar que será usada uma classe.

class Animal{
    protected $nome; //= null
    protected $idade; //=null
    protected $cor;  //null

    //construtor com todos os atributos
    public function __construct($nome,$idade,$cor)
    {
     $this->nome= $nome;
     $this->idade = $idade;   
     $this->cor = $cor;
      
    }

    //Método exclusivo da classe animal
    public function comunicar(){
        echo "Fazendo barulho\n";
    }


}
?>