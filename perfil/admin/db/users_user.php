<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Usuário</title>
    <style>
        body {
            font-family: verdana;
        }
    </style>   
</head>
<body>
    <?php
        include("connection.php");
    
        if (isset($_GET["Cod_Cliente"])) {
            $id = $_GET["Cod_Cliente"];

            $sql = "SELECT Cod_Cliente, Nome, CPF, Email, Senha_login, Genero, CEP, DT_Nasc, Faixa_preco, Inter_Nacional, 123Pontos FROM cliente WHERE Cod_Cliente = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "Codigo do Cliente: $id<br>";
                    echo "Nome: {$row['Nome']}<br>";
                    echo "CPF: {$row['CPF']}<br>";
                    echo "CEP: {$row['CEP']}<br>";
                    echo "Genero: {$row['Genero']}<br>";
                    echo "Data de Nascimento: {$row['DT_Nasc']}<br>";
                    echo "Email: {$row['Email']}<br>";
                    echo "Senha_login: {$row['Senha_login']}<br>";
                    echo "Faixa de Preço: {$row['Faixa_preco']}<br>";
                    echo "Preferencia de Viagem: {$row['Inter_Nacional']}<br>";
                    echo "Pontos Possuidos: {$row['123Pontos']}<br>";
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