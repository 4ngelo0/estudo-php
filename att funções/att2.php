<!-- 2) Faça um programa que o usuário faça 3 chamadas de funções, e para cada chamada, verifique se o valor é par ou ímpar e também fazer o fatorial -->

<?php
function valor($v){

if($v%2==0){
    echo "O valor é par" . "<br/>";
    }

elseif($v%2!=0){
    echo "O valor é ímpar" . "<br/>";
    }

    $s = 1;
    for($contador =  $v ; $contador >= 1; $contador--){
        $s = $s*$contador;
        echo $s . "<br/>";
        }
}

echo valor(0) . "<br/>";

$operador = "*";
if($operador == "*"){
    echo valor(5) . "<br/>";
}
else{
    echo "Operador invalido";
}

switch ($operador){
    case '*':
        echo valor(5);
        break;
    default:
        echo "Operador invalido";
        break;
}


?>