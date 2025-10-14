<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Formulários.</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome">Nome: </label>
            <input type="text" name="name" id="idnome">
            <label for="snome">Sobrenome: </label>
            <input type="text" name="sname" id="idsnome">
            <input type="submit" value="Enviar">
        </form>
    </section>
    
    
</body>
</html>