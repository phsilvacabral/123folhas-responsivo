<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Se Interessa</title>
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

        $sql = "SELECT Cod_Inteteresse, fk_Cliente_Cod_Cliente, fk_Destino_Cod_Lugar, Comentario, DT_Adicao FROM se_interessa";
        $result = $conn->query($sql);
        echo "<p>ID Do Utilizador: " . $_SESSION["Cod_Cliente"] . "</p>";
        echo "<p>Número de registros na tabela: " . $result->num_rows . "</p>";
    ?>
    <a id="AD" href="../db/users_lst.php">Lista de Usuarios</a>
    <a id="AD" href="../db1/destino_lst.php">Lista de Destinos</a>
    <a id="AD" href="../db2/blog_lst.php">Lista de Blogs</a>
    <a id="AD" href="../db3/brinde_lst.php">Lista de Blogs</a>
    <table>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td>
                    <a href="interessa_info.php?Cod_Inteteresse=<?php echo $row['Cod_Inteteresse']?>"><?php echo $row['Cod_Inteteresse']?></a>
                </td>
                <td><?php echo $row['fk_Cliente_Cod_Cliente']?></td>
                <td><?php echo $row['fk_Destino_Cod_Lugar']?></td>
                <td><?php echo $row['Comentario']?></td>
                <td><?php echo $row['DT_Adicao']?></td>
                <td>
                    <a id="Editar" href="interessa_edit.php?Cod_Inteteresse=<?php echo $row['Cod_Inteteresse']?>" style="display: none;">Editar</a>
                </td>
                <td onclick="remove(<?php echo $row['Cod_Inteteresse']?>);">
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

        if (<?php echo $_SESSION['Cod_Cliente']; ?> <= 14) {
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
                location.href = 'interessa_del_php.php?Cod_Inteteresse='+ID
            }
        }
    </script>
</body>
</html>