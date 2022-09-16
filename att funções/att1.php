<!-- 1) Faça um programa que execute 2 chamadas de funções, para verificar se é um número é positivo, negativo ou igual a zero -->

<?php


function valor($n){

    if($n >0){
        echo "O valor é positivo";
    }
    elseif($n <0){
        echo "O valor é negativo";
    }
    else
    echo "o valor é igual a zero";

}

echo valor(0) . "<br/>";

$operador = "*";
if($operador == "*"){
    echo valor(5) ;
}
else{
    echo "Operador invalido";
}

?>