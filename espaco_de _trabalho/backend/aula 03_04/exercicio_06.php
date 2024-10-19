<?
$aulasDadas = 40;
$faltas = 5;
$aulasassistidas = $aulasDadas - $faltas;
$frequencias = ($aulasassistidas / $aulas) * 100;

if($frequencia >= 75){
    echo "A aluna está apta para fazer a prova final.";
} else{
    echo "A aluna não está apta para fazer  a prova final.";
}






?>