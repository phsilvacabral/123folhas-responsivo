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
    
        if (isset($_GET["Cod_Lugar"])) {
            $id = $_GET["Cod_Lugar"];

            $sql = "SELECT Cod_Lugar, Nome_Lugar, Cidade, Estado, Pais, Nivel_dificul, Preco_aprox, HTML_pagina, Descricao FROM destino WHERE Cod_Lugar = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "Codigo do Lugar: $id<br>";
                    echo "Nome: {$row['Nome_Lugar']}<br>";
                    echo "Cidade: {$row['Cidade']}<br>";
                    echo "Estado: {$row['Estado']}<br>";
                    echo "Pais: {$row['Pais']}<br>";
                    echo "Descrição: {$row['Descricao']}<br>";
                    echo "Nivel de Dificuldade: {$row['Nivel_dificul']}<br>";
                    echo "Preço Aproximado: {$row['Preco_aprox']}<br>";
                    echo "HTML da Pagina: {$row['HTML_pagina']}<br>";
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