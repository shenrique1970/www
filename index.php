<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Arquivos</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        ul { list-style: none; padding: 0; }
        li { margin-bottom: 8px; }
        a { text-decoration: none; color: blue; }
        .excluir { color: red; margin-left: 10px; }
        .icone { margin-right: 8px; }
    </style>
</head>
<body>
    <h1>📁 Gerenciador de Arquivos</h1>

    <?php
    $diretorio = './curso/';

    
    ?>

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
</body>
</html>
