<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Arquivos</title>
    <link rel="stylesheet" href="curso/css/estilo.css">
</head>

<body>
    <header>
        <h1>Gerenciador de Arquivos📁 </h1>
    </header>

    <?php
    $diretorio = './curso/';
    ?>
    <section>
        <?php if (is_dir($diretorio)): ?>
            <?php
            $arquivos = array_diff(scandir($diretorio), ['.', '..']);
            ?>

            <?php if (!empty($arquivos)): ?>
                <ul>
                    <?php foreach ($arquivos as $arquivo): ?>
                        <?php
                        $caminho = $diretorio . $arquivo;
                        $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
                        $icone = match ($extensao) {
                            'jpg', 'png', 'gif' => '🖼️',
                            'pdf' => '📄',
                            'txt' => '📃',
                            'php' => '🐘',
                            default => '📁',
                        };
                        ?>
                        <li>
                            <span class="icone"><?= $icone ?></span>
                            <a href="<?= $caminho ?>" target="_blank"><?= $arquivo ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>O diretório está vazio.</p>
            <?php endif; ?>
        <?php else: ?>
            <p style="color:red;">Diretório não encontrado: <b><?= $diretorio ?></b></p>
        <?php endif; ?>
    </section>

</body>

</html>