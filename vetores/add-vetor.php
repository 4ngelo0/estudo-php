<!DOCTYPE html>
<html lang="en">
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
            "Naruto",
            "One piece",
            "Dragon ball"
        ];

        echo var_dump($vetor). "</br></br>";
        array_push($vetor, "Attack on titan"); // adiciona uma nova posição para o vetor (ao final)
        echo var_dump($vetor). "</br></br>";
        ?>
    </pre>
</div>

</body>
</html>