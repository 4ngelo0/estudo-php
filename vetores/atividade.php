<!-- 
    1) crie um vetor de 5  posições de números inteiros ordene as posições pelas chaves em ordem crescente, faça um laço de repetição onde você deve fazer o quadrado de cada valor contido no vetor e criar um novo vetor com os novos valores. mostre na tela todas as informações possíveis
 -->

<?php

$vetor = [200,23,6,19,1];
echo var_dump($vetor)."</br></br>";

asort($vetor);
echo var_dump($vetor)."</br></br>";

for($contador=0;$contador<count($vetor);$contador++){
$novovetor[] = $vetor[$contador]*$vetor[$contador];
}
echo var_dump($novovetor);

?>