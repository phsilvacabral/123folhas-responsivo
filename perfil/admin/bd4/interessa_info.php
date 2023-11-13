<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Blog</title>
    <style>
        body {
            font-family: verdana;
        }
    </style>   
</head>
<body>
    <?php
        include("connection.php");
    
        if (isset($_GET["Cod_Inteteresse"])) {
            $id = $_GET["Cod_Inteteresse"];

            $sql = "SELECT Cod_Inteteresse, fk_Cliente_Cod_Cliente, fk_Destino_Cod_Lugar, Comentario, DT_Adicao FROM se_interessa WHERE Cod_Inteteresse = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "Codigo do Interessa: $id<br>";
                    echo "Chave Estrangeira Cliente: {$row['fk_Cliente_Cod_Cliente']}<br>";
                    echo "Chave Estrangeira Lugar: {$row['fk_Destino_Cod_Lugar']}<br>";
                    echo "Comentario: {$row['Comentario']}<br>";
                    echo "Data de Adição: {$row['DT_Adicao']}<br>";
                }
            }  
        }     
    ?>
    </table>
    <script>
        if (<?php echo $_SESSION['Cod_Cliente']; ?> >= 14) {
            window.alert('Você não tem permissão de acessar esta página!')
            history.go(-1)
        }
    </script>
</body>
</html>