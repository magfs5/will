<?PHP
class Aluno extends Pessoa{
    private $notas =[];
    private $rg;


    public function __construct($nome,$datadeNascimento,$disciplina,$cpf,$identificacão,$rg){
    
        parent::__construct($nome, $datadeNascimento, $disciplina, $cpf,$identificacão);
        $this->rg = $rg;
        
    }
}






?>