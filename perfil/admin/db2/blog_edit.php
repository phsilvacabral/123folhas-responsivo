<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Viagem</title>
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
    <?php
        include("connection.php");
        if (isset($_GET["Cod_blog"])) {
            $id = $_GET["Cod_blog"];
            $sql = "SELECT Cod_Blog, Titulo, Autor, Data_publicada, Gostei, Deslike, HTML_blog FROM Blog WHERE Cod_blog = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $Titulo = $row['Titulo'];
                    $Autor = $row['Autor'];
                    $Data_pub = $row['Data_publicada'];
                    $Gostei = $row['Gostei'];
                    $NGostei = $row['Deslike'];
                    $HTML_pagina = $row['HTML_blog'];
                }
            }  
        }     
    ?>
    <h1>Edição de Lugar</h1>
    <form id="form1" name="form1" method="post" action="blog_edit_php.php">
        Codigo de Destino Blog: <?php echo $id?><input type="hidden" name="hidId" value="<?php echo $id?>"> <br>
        Titulo: <input type="text" id="txtTitulo" name="txtTitulo" value="<?php echo $Titulo?>" maxlength="255" required>
        Autor: <input type="text" id="txtAutor" name="txtAutor" value="<?php echo $Autor?>" maxlength="100" required>
        Data de Publicação: <input type="date" id="dateData_Pub" name="dateData_Pub" value="<?php echo date('Y-m-d', strtotime($Data_pub))?>">
        Gostei: <input type="number" id="numberGostei" name="numberGostei" value="<?php echo $Gostei?>">
        Não Gostei: <input type="number" id="numberNGostei" name="numberNGostei" value="<?php echo $NGostei?>">
        HTML da Pagina: 
        <textarea id="txtHTML" name="txtHTML" rows="5" cols="30" style="resize: none;"><?php echo $HTML_pagina?></textarea>
        <input type="submit" value="Enviar">
    </form>
    <script>
    </script>
</body>
</html>