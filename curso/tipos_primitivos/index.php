<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!--    escalares    compostos    especiais    -->
    <header>
        <h1>Tipos</h1>
        <button onclick="mostrar('escalares')">Escalares</button>
        <button onclick="mostrar('compostos')">Compostos</button>
        <button onclick="mostrar('especiais')">Especiais</button>
    </header>

    <section id="escalares" class="tab active">
        <?php

        echo '<h3><b>Tipos primitivos escalares.</b></h3>';
        echo "<h3>Inteiro </h3>";
        echo '<pre><code>$idade = 25; </code></pre>';
        echo "do tipo ";
        $idade = 25;
        var_dump($idade);

        echo "<h3>float/double</h3>";
        echo '<pre><code>$preco = 99.90; </code></pre>';
        echo "do tipo ";
        $preco = 99.90;
        var_dump($preco);

        echo '<br><br><span>Nota: real a partir da versão 7 deixou de ser usasdo </span>';

        echo "<h3>string</h3>";
        echo '<pre><code>$mensagem = "Bem-vindo!"; </code></pre>';
        echo "do tipo ";
        $mensagem = "Bem-vindo!";
        var_dump($mensagem);

        echo "<h3>boolean </h3>";
        echo '<pre><code>$ativo = true; </code></pre>';
        echo "do tipo ";
        $ativo = true;
        var_dump($ativo);

        echo "<h3>Em PHP, 0x1A é uma representação de um número inteiro (tipo int) em notação hexadecimal (base 16)";
        echo "<hr>";
        echo '<pre><code>$num = 0x1A </code></pre>';
        echo " do tipo ";
        $num = 0x1A;
        var_dump($num);
        echo "<br>";
        print "E o valor desta variável é $num";

        echo "<h3>Em PHP, 3e2 é uma variável do tipo float (ponto flutuante).
         Essa notação é a forma como a linguagem interpreta números em 
         notação científica.</h3>";
        echo '<pre><code>$numa = 3e2; </code></pre>';
        $numa = 3e2;
        echo "do tipo ";
        var_dump($numa);
        echo " Como fazer para mudar o float?";

        echo '<hr>';

        echo '<pre><code>$numa = (int) 3e2; </code>coerção</pre>';
        echo " do tipo ";
        $numa = (int) 3e2;
        var_dump($numa);
        echo '<hr>';

        echo '<pre><code>$numb = (int) "750" </code>coerção</pre>';
        echo " do tipo ";
        $numb = (int) "750";
        var_dump($numb);
        echo '<hr>';

        echo '<span>0x = HEXADECIMAL 0b = BINÁRIO 0 = OCTAL</span>';
        // 0x indica que o número está em base 16 (hexadecimal)
        // 1A é o valor hexadecimal
        // 3e2 ou 3x10 ^2 ou 3x100 = 300
        ?>
        <hr>
    </section>

    <section id="compostos" class="tab">
        <h2>Tipos compostos (não primitivos, mas importantes)</h2>

        <?php
        echo "<b>Array.</b>";
        $codigo1 = '
            <?php 
                $frutas = ["maçã", "banana", "laranja"];
                echo $frutas[1]    //banana;
            ?>';
        ?>
        <pre id="codigo1"><?php echo htmlspecialchars($codigo1); ?></pre>
        <button onclick="copiar('codigo1')">Copiar código</button>

        <hr>

        <?php
        echo "<b>Array associativo.</b>";
        $codigo2 = '
            <?php 
                $usuario = ["nome" => "João", "idade" => 30];
                echo $usuario["nome"] . "<br>"; // João
            ?>';
        ?>
        <pre id="codigo2"><?php echo htmlspecialchars($codigo2); ?></pre>
        <button onclick="copiar('codigo2')">Copiar código</button>

        <hr>

        <?php
        echo "<h3><b>Object — instância de uma classe.</b></h3>";
        $codigo3 = '
            <?php 
                class Pessoa
                {
                    public $nome;
                    public function __construct($nome)
                    {
                        $this->nome = $nome;
                    }
                }

                $p = new Pessoa("Maria");
                echo $p->nome;
            ?>';
        ?>
        <pre id="codigo3"><?php echo htmlspecialchars($codigo3); ?></pre>
        <button onclick="copiar('codigo3')">Copiar código</button>
        <hr>
    </section>

    <section id="especiais" class="tab">

        <?php
        echo "<h3>Resource — ponte para recursos externos.</h3>";
        $codigo4 = '
            <?php 
                $arquivo = fopen("exemplo.txt", "r");
                if (is_resource($arquivo)) {
                    echo "Arquivo aberto com sucesso! " . "<br>";
                    fclose($arquivo);
                } 
            ?>';
        ?>
        <pre id="codigo4"><?php echo htmlspecialchars($codigo4); ?></pre>
        <button onclick="copiar('codigo4')">Copiar código</button>

        <hr>

        <?php
        echo "<h3>Callable — função ou método que pode ser chamado.</h3>";
        $codigo5 = '
            <?php 
                function saudacao() {
                    return "Olá!";
                }

                $chamada = "saudacao";

                if (is_callable($chamada)) {
                    echo $chamada(); // Olá!
                }
                
            ?>';
        ?>
        <pre id="codigo5"><?php echo htmlspecialchars($codigo5); ?></pre>
        <button onclick="copiar('codigo5')">Copiar código</button>

        <hr>

        <?php
        echo "<h3>Null — ausência de valor.</h3>";
        echo '<h3>null - <code>$usuario = null </code></h3>';
        echo "do tipo ";
        $usuario = null;
        var_dump($usuario);
        ?>

        <hr>

        <?php
        $codigo6 = '
            <?php
                $usuario = null;

                if (is_null($usuario)) {
                    echo "Usuário não definido.";
                }
            ?>';
        ?>
        <pre id="codigo6"><?php echo htmlspecialchars($codigo6); ?></pre>
        <button onclick="copiar('codigo6')">Copiar código</button>

        <hr>

        <?php
        echo "<h3><b>mixed — tipo genérico (usado em declarações de função)</b></h3>";
        $codigo7 = '
            <?php
                function processar(mixed $entrada): mixed
                {
                    if (is_array($entrada)) {
                        return count($entrada);
                    } elseif (is_string($entrada)) {
                        return strtoupper($entrada);
                    } else {
                        return $entrada;
                    }
                }

                echo processar("texto");       // TEXTO
                echo processar([1, 2, 3]);     // 3
                echo processar(42);            // 42
            ?>';
        ?>
        <pre id="codigo7"><?php echo htmlspecialchars($codigo7); ?></pre>
        <button onclick="copiar('codigo7')">Copiar código</button>
        <hr>
    </section>
    <script src="js/script.js"></script>
</body>

</html>