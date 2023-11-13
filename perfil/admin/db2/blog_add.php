<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Blog</title>
    <style>
        body {
            font-family: verdana;
        }
        input {
            display: flex;
            border-radius: 5px;
        }
        textarea {
            display: flex;
            border-radius: 5px;
        }
        select {
            display: flex;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php session_start(); ?>
    <script>
        if (<?php echo $_SESSION['Cod_Cliente']; ?> > 7) {
            window.alert('Você não tem permissão para acessar esta página!');
            history.go(-1);
            exit();
        }
    </script>
    <h1>Adição de Viagem</h1>
    <form id="form1" name="form1" method="post" action="blog_add_php.php">
        Titulo: <input type="text" id="txtTitulo" name="txtTitulo" value="" maxlength="255" required>
        Autor: <input type="text" id="txtAutor" name="txtAutor" value="" maxlength="100" required>
        Data de Publicação: <input type="date" id="dateData_Pub" name="dateData_Pub" value="">
        Gostei: <input type="number" id="numberGostei" name="numberGostei" value="">
        Não Gostei: <input type="number" id="numberNGostei" name="numberNGostei" value="">
        HTML da Pagina: 
        <textarea id="txtHTML" name="txtHTML" rows="5" cols="30" style="resize: none;"></textarea>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>