<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
    <pre>
        <?php 
       
    $frutas = ["Maça", "Laranja","Limão"];
    $legumes = ["Batata", "Abóbrora","Ovo"];
    $alimentos = array_merge($frutas, $legumes); //junta ambas os vetores acima

    echo var_dump($frutas). "</br></br>";
    echo var_dump($legumes). "</br></br>";
    echo var_dump($alimentos);

    foreach($alimentos as $novo){ //percorre todas as posições do vetor
        echo "<h2>$novo</h2></br>";
    }
        ?>


    </pre>
</div>

</body>
</html>