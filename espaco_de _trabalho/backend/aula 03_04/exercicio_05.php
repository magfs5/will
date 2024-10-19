<?php



$nota = 8;
$mensalidade = 1000;

if($nota >= 9){
    $desconto = $mensalidade *0.20;

}else if($nota >7){
    $desconto = $mensalidade *0.10;

}else {
    $desconto = 0;
}

$mensalidadecomdesconto = $mensalidade - $desconto;
echo "Mensalidade com sucesso R$". $mensalidadecomdesconto;















?>




