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
                "nome" => "Emanuela",
                "rua" => "Rua dos sete anões",
                "peso" => "meio quilo",
                "cidade" => "Itu",
            ];
            echo var_dump($vetor). "</br></br>";
            

            ksort($vetor); //ordem crescente com o s atributos, como nome e rua
            echo var_dump($vetor);

            krsort($vetor); //Ordena de forma decrescente, usando a chave associada 
            echo var_dump($vetor);
            ?>


        </pre>
    </div>

    </body>
    </html>