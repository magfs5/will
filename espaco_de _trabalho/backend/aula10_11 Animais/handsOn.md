

1. Criar uma subpasta dentro da pasta da aula10 com o nome `animais`.
2. Criar duas classes[arquivos], uma chamada Animal e outra chamada Mamifero.
3. Na classe Animal, incluir as seguintes características:
nome, idade, cor.
4. E um médoto chamado comunicar, que quando invocado irá exibir a mensagem: Fazendo barulho.
5. Criar o construct dessa classe Animal.
6. Colocar  os atributos como protected.
7. Na classe [Mamifero], incluir uma característica para receber a quantidade de patas.
8. Incluir um construct que recebe tudo que o Animal faz, além da quantidade de patas.

<?Php
class Animal{
    protected $nome ; //= null
    protected $idade; //=null
    protected $cor;  //null

//construtor com todos os atributos
    public function __construct($nome,$idade,$cor)
    {
     $this-> nome= $nome;
     $this->idade = $idade;   
     $this-> cor = $cor;
      
    }

//Método exclusivo da classe animal
    public function comunicar(){
        echo "Fazendo barulho\n";
    }


}
?>

?>