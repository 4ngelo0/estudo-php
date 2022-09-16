<!-- 3) Faça um função que receba dois parâmetros, de salário e porcentagem de aumento de salário. Faça 3 chamadas da função, e a partir do salário e porcentagem de aumento, calcule o novo salário, e a final mostre salário, porc. de aumento, valor do aumento e novo salário -->

<?php

function valor($sal, $porc){
    $aumento = ($sal*$porc)/100;
    $n_sal = $sal+$aumento;

    echo "O salario é : " . $sal . "<br/>"; 
    echo "A porcentagem de aumento é de : " . $porc . "%<br/>"; 
    echo "O aumento é : " . $aumento . "<br/>"; 
    echo "O  novo salario : " . $n_sal . "<br/>"; 
}

echo valor(1000,2) . "<br/>";

$operador = "*";
if($operador == "*"){
    echo valor(1000, 2) . "<br/>";
}
else{
    echo "Operador invalido";
}

switch ($operador){
    case '*':
        echo valor(1000, 2) . "<br/>";
        break;
    default:
        echo "Operador invalido";
        break;
}

?>