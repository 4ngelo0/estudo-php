<?php

$vetor = array(2, "Teste", 'A', false, 10.5);
echo var_dump($vetor). "</br></br>";

// Ponteiros: apontam para uma posição do vetor

$p1 = current($vetor); //Aponto para o valor corrente (atual)
echo var_dump($p1). "</br></br>";

$p2 =  next($vetor); //Aponta para o próximo valor do vetor
echo var_dump($p2). "</br></br>";

$p3 = end($vetor); //Aponta par o último valor do vetor
echo var_dump($p3)."</br></br>";

$p4 = prev($vetor); //Aponta paara a posição anterior
echo var_dump($p4)."</br></br>";

echo $vetor[2]; //mostra o valor na posição 2 do vetor
?>