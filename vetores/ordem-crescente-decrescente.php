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
        $vetor = [
            "Carlos",
            "Gabriel",
            "Wesley",
            "Ana",
            "Maria",
        ];

        echo var_dump($vetor). "</br></br>";
        
        asort($vetor); // Exibe o vetor em ordem crescente
        echo var_dump($vetor);

        rsort($vetor); // Exibe o vetor em ordem decrescente
        echo var_dump($vetor);
        ?>


    </pre>
</div>

</body>
</html>