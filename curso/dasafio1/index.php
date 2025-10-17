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
        <form action="#" method="get">
            <label for="numero">Digito um numero</label>
            <input type="number" name="numero" id="idnumero">
            <input type="submit" value="Enviar">
        </form>
    </section>
    <section>
        <h3>Antecessor e sucessor.</h3>
        <pre><code>
            if (isset($_GET["numero"])) {
                $numero = (int) $_GET["numero"];
                $antes = $numero - 1;
                $depois = $numero + 1;
                echo "Antecessor: $antes | Número digitado: $numero | Sucessor: $depois.";
            }
        </code></pre>
        <?php
            if (isset($_GET["numero"])) {
                $numero = (int) $_GET["numero"];
                $antes = $numero - 1;
                $depois = $numero + 1;
                echo "Antecessor: $antes | Número digitado: $numero | Sucessor: $depois.";
            }
        ?>

    </section>

</body>

</html>