<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Viagem</title>
</head>
<body>
    <p>Criar nova viajem</p>

    <form action="" method="post">
        <label>Nome do destino: <input type="text" name="nome_destino"></label>

        <label>Descrição do destino: <input type="text" name="desc_destino"></label>

        <label>Cidade: <input type="text" name="cidade_destino"></label>

        <label>Estado: <input type="text" name="estado_destino"></label>

        <label>País: <input type="text" name="pais_destino"></label>

        <label>Nível de dificuldade: <input type="number" name="dificuldade_destino" min="1" max="5"></label>

        <label>Preço: <input type="number" name="preco_destino"></label>

        <label>Código HTML da página: <input type="text" name="cod_html_pag"></label>

        <input type="submit" value="Publicar">
    </form>

    <input type="button" value="Cancelar">
</body>
</html>