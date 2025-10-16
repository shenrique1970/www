<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h1>Funções aritméticas</h1>
    </header>
    <section>
        <pre><code>
            $r = abs(-500);
            print("A resposta é $r");
        </code></pre>
        <?php
        $r = abs(-500);
        print("A resposta é $r");
        ?>
    </section>
    <section>
        <pre><code>
            $r1 = base_convert(254, 10, 2);
            $r2 = base_convert(254, 10, 8);
            $r3 = base_convert(254, 10, 16);
            print("A resposta é $r1 binario.");
            print("A resposta é $r2 base 10 para base 8.");
            print("A resposta é $r3 Hexadecimal.");
        </code></pre>
        <?php
            $r1 = base_convert(254, 10, 2);
            $r2 = base_convert(254, 10, 8);
            $r3 = base_convert(254, 10, 16);
            print("A resposta é $r1 binario. <br> ");
            print("A resposta é $r2 base 10 para base 8. <br> ");
            print("A resposta é $r3 Hexadecimal. <br>");
        ?>
    </section>

</body>

</html>