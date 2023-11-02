<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar brinde</title>
</head>
<body>

    <p>Editar dados de um brinde do 123recompensa</p>

    <form action="" method="$_POST">
        Pesquise pelo id do produto: <input type="number">
        <input type="submit" value="Pesquisar">
    </form>

    <div id="brinde atual">
        foto do brinde: <img src="" alt="">
        <p>Nome do brinde</p>
        <p>descrição</p>
        <p>preço</p>

    </div>

    <form action="" method="post">
        <Label>Nome: <input type="text" name="nome_brinde"></Label>
        <label>Descrição: <input type="text" name="descricao_brinde"></label>
        <label>Preço: <input type="number" name="preco_brinde"></label>
        <input type="submit" value="Atualizar">
    </form>
    <input type="button" value="Cancelar">
    
</body>
</html>