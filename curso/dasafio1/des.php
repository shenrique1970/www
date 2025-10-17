<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Desafio 1</h1>
    </header>
    
    <section>
        <h3>Antecessor e sucessor.</h3>
        
        <?php
            // isset() para evitar erro
            if (isset($_GET["numero"])) {
                $numero = (int) $_GET["numero"];
                $antes = $numero - 1;
                $depois = $numero + 1;
                echo "Antecessor: $antes | Número digitado: $numero | Sucessor: $depois.";
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
    
</body>
</html>