<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h1>Expressões</h1>
    </header>
    <section>
        <pre><code>
            $res = 5 + 2 / 2;
            echo "O resultado é $res";
         </code></pre>
        <?php
        $res = 5 + 2 / 2;
        echo "O resultado é $res <br>";
        ?>
        <br>
        <span>
            Ordem de precedência matemática. <br>
            ** Potência. <br>
            * / % Multiplicação Divisão Modulo. <br>
            +- Adição Subtração. <br>
            <pre><code>echo 50/2+3**2;</code></pre>
            <?php echo 50/2+3**2; ?><br>
            <br>
            <pre><code>echo 50/(2+3)**2;</code></pre>
            <?php echo 50/(2+3)**2; ?><br>
        </span>
    </section>

</body>

</html>