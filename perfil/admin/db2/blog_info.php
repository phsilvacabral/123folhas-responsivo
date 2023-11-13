<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Destino</title>
    <style>
        body {
            font-family: verdana;
        }
    </style>   
</head>
<body>
    <?php
        include("connection.php");
    
        if (isset($_GET["Cod_Blog"])) {
            $id = $_GET["Cod_Blog"];

            $sql = "SELECT Cod_Blog, Titulo, Autor, Data_publicada, Gostei, Deslike, HTML_blog FROM Blog WHERE Cod_blog = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "Codigo do Blog: $id<br>";
                    echo "Titulo: {$row['Titulo']}<br>";
                    echo "Autor: {$row['Autor']}<br>";
                    echo "Data de Publicação: {$row['Data_publicada']}<br>";
                    echo "Número de Likes: {$row['Gostei']}<br>";
                    echo "Número de Likes: {$row['Deslike']}<br>";
                    echo "HTML da Pagina: {$row['HTML_blog']}<br>";
                }
            }  
        }     
    ?>
    </table>
    <script>
        if (<?php echo $_SESSION['Cod_Cliente']; ?> < 8) {
            window.alert('Você não tem permissão de acessar esta página!')
            history.go(-1)
        }
    </script>
</body>
</html>