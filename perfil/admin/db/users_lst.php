<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: verdana;
        }

        a {
            text-decoration: none;
            color: black;
            border: 2px solid black;
            border-radius: 5px;
            padding: 2px;
        }
        td {
            padding: 5px;
        }
        #ADD {
            margin-bottom: 10px;
            display: none;
        }
        #Edit {
            color: black;
        }
        #Excluir{
            color: black;
        }
        table {
            margin-top: 15px;
            border: 2px solid black;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
        include("connection.php");

        session_start();
        if (!isset($_SESSION["Cod_Cliente"])) {
            header("Location: index.php");
        }

        $sql = "SELECT Cod_Cliente, Nome, CPF, Email, Senha_login, Genero, CEP, DT_Nasc, Faixa_preco, Inter_Nacional, 123Pontos FROM cliente";
        $result = $conn->query($sql);
        echo "<p>ID Do Utilizador: " . $_SESSION["Cod_Cliente"] . "</p>";
        echo "<p>Número de registros na tabela: " . $result->num_rows . "</p>";
    ?>
    <a id="ADD" href="users_add.php">Adicionar Usuário</a>
    <a id="AD" href="../db1/destino_lst.php">Lista de Destinos</a>
    <a id="AD" href="../db2/blog_lst.php">Lista de Blogs</a>
    <table>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td>
                    <a href="users_user.php?Cod_Cliente=<?php echo $row['Cod_Cliente']?>"><?php echo $row['Cod_Cliente']?></a>
                </td>
                <td><?php echo $row['Nome']?></td>
                <td><?php echo $row['CPF']?></td>
                <td><?php echo $row['Email']?></td>
                <td><?php echo $row['Senha_login']?></td>
                <td><?php echo $row['Genero']?></td>
                <td><?php echo $row['CEP']?></td>
                <td><?php echo $row['DT_Nasc']?></td>
                <td><?php echo $row['Faixa_preco']?></td>
                <td><?php echo $row['Inter_Nacional']?></td>
                <td><?php echo $row['123Pontos']?></td>
                <td>
                    <a id="Editar" href="users_edit.php?id=<?php echo $row['Cod_Cliente']?>" style="display: none;">Editar</a>
                </td>
                <td onclick="remove(<?php echo $row['Cod_Cliente']?>);">
                    <a id="Excluir" href="#" style="display: none;">Excluir</a>
                </td>
            </tr>
        <?php
                }
             }
        ?> 
    <script>
        var editarLinks = document.querySelectorAll("#Editar");
        var excluirLinks = document.querySelectorAll("#Excluir");

        if (<?php echo $_SESSION['Cod_Cliente']; ?> < 8) {
            ADD.style.display = "inline"
            editarLinks.forEach(function(link) {
                link.style.display = "inline";
            });

            excluirLinks.forEach(function(link) {
                link.style.display = "inline";
            });
        } else {
            window.alert('Você não tem permissão de acessar esta página!')
            history.go(-1)
        }
    </script>
    </table>
    <script>
        function remove(ID) {
            if (confirm("Tem certeza que deseja excluir ese registro?")) {
                location.href = 'users_del_php.php?Cod_Cliente='+ID
            }
        }
    </script>
</body>
</html>