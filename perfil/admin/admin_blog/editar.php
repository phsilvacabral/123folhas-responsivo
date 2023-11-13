<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar blog</title>
</head>
<body>
    <p>Editar blog</p>
    <form action="" method="post">
        <label>Digite o id do blog que deseja editar:<input type="text" name="id_blog"></label>

        <input type="submit" value="Pesquisar">
    </form>

    <form action="" method="post">
        <label>Título do blog: <input type="text" name="titulo" id="titulo" value="(Atual nome do blog)"></label>

        <label>Autor: <input type="text" name="autor" id="autor" value="(Atual autor do nome)"></label>

        <label>Código HTML do blog: <input type="text" name="cod_html" id="cod_html" value="(Código HTML do blog)"></label>

    </form>

    <input type="submit" value="Atualizar">
    <input type="button" value="Cancelar">
</body>
</html>