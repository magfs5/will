<?php

//1. criar o arquivo o professor. php.
//2. dentro do arquivo Profssor. php, você irá criar uma classe chamada professor.
//3. Dentro da classe Professor, você irá declarar os seguintes atributos:
// nome
// cpf
//disciplina
//.     identificação

//4.E também os seguintes métodos:
//getDisciplina
//getNome
//setDisciplina
//setCpf



class Aluno {
    
    private $nome;
    private $cpf;
    private $disciplina = true;
    private $identificacao = [];

    public function getDisciplina(){
        return $this->nome;
    }
    public function getNome(){
        return $this->nome;

    }
  
  public function setDisciplina($disciplinanova){
        $this->disciplina = $disciplinanova;
  }
        

  public function setcpf($cpfnovo){
        $this->cpf = $cpfnovo;
        
    

    }

}


?>






