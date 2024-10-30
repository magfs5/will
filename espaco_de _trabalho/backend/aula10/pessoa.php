<?php

class Pessoa{
protected $nome;
protected $datadeNascimento;
protected $disciplina;
protected $cpf;
protected $identificacao;

public function __construct($nome,$datadeNascimento,$disciplina,$cpf,$identificacao)
{
 $this-> nome= $nome;
 $this->datadeNascimento = $datadeNascimento;   
 $this->disciplina = $disciplina;
 $this->cpf = $cpf;
 $this->identificacao = $identificacao;   

}
public function exibirInfo(){
    echo "Nome: $this-> nome \n";
    echo "cpf: $this-> cpf \n";
}
}


?>