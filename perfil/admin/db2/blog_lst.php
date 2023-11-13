<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Blog</title>
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

        $sql = "SELECT Cod_Blog, Titulo, Autor, Data_publicada, Gostei, Deslike, HTML_blog FROM Blog";
        $result = $conn->query($sql);
        echo "<p>ID Do Utilizador: " . $_SESSION["Cod_Cliente"] . "</p>";
        echo "<p>Número de registros na tabela: " . $result->num_rows . "</p>";
    ?>
    <a id="ADD" href="blog_add.php">Adicionar Blog</a>
    <a id="AD" href="../db/users_lst.php">Lista de Usuarios</a>
    <a id="AD" href="../db1/destino_lst.php">Lista de Destinos</a>
    <table>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td>
                    <a href="blog_info.php?Cod_Blog=<?php echo $row['Cod_Blog']?>"><?php echo $row['Cod_Blog']?></a>
                </td>
                <td><?php echo $row['Titulo']?></td>
                <td><?php echo $row['Autor']?></td>
                <td><?php echo $row['Data_publicada']?></td>
                <td><?php echo $row['Gostei']?></td>
                <td><?php echo $row['Deslike']?></td>
                <td><?php echo $row['HTML_blog']?></td>
                <td>
                    <a id="Editar" href="blog_edit.php?Cod_blog=<?php echo $row['Cod_Blog']?>" style="display: none;">Editar</a>
                </td>
                <td onclick="remove(<?php echo $row['Cod_Blog']?>);">
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
                location.href = 'blog_del_php.php?Cod_blog='+ID
            }
        }
    </script>
</body>
</html>