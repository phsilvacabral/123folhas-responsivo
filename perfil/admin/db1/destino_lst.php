<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Viagens</title>
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

        $sql = "SELECT Cod_Lugar, Nome_Lugar, Cidade, Estado, Pais, Nivel_dificul, Preco_aprox, HTML_pagina, Descricao FROM destino";
        $result = $conn->query($sql);
        echo "<p>ID Do Utilizador: " . $_SESSION["Cod_Cliente"] . "</p>";
        echo "<p>Número de registros na tabela: " . $result->num_rows . "</p>";
    ?>
    <a id="ADD" href="destino_add.php">Adicionar Destino</a>
    <a id="AD" href="../db/users_lst.php">Lista de Usuarios</a>
    <a id="AD" href="../db2/blog_lst.php">Lista de Blog</a>
    <table>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td>
                    <a href="destino_info.php?Cod_Lugar=<?php echo $row['Cod_Lugar']?>"><?php echo $row['Cod_Lugar']?></a>
                </td>
                <td><?php echo $row['Nome_Lugar']?></td>
                <td><?php echo $row['Cidade']?></td>
                <td><?php echo $row['Estado']?></td>
                <td><?php echo $row['Pais']?></td>
                <td><?php echo $row['Descricao']?></td>
                <td><?php echo $row['Nivel_dificul']?></td>
                <td><?php echo $row['Preco_aprox']?></td>
                <td><?php echo $row['HTML_pagina']?></td>
                <td>
                    <a id="Editar" href="destino_edit.php?Cod_Lugar=<?php echo $row['Cod_Lugar']?>" style="display: none;">Editar</a>
                </td>
                <td onclick="remove(<?php echo $row['Cod_Lugar']?>);">
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
                location.href = 'destino_del_php.php?Cod_Lugar='+ID
            }
        }
    </script>
</body>
</html>