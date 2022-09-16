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
       
    $v = array(
        "Bob",
        13,
        "Bob",
        "Maria",
        33,
        false
    );
    echo var_dump($v). "</br></br>";
    
    $v = array_unique($v); // Elimina informação repetidads
    echo var_dump($v) 

        ?>


    </pre>
</div>

</body>
</html>