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
        if (<?php echo $_SESSION['Cod_Cliente']; ?> >= 14) {
            window.alert('Você não tem permissão para acessar esta página!');
            history.go(-1);
            exit();
        }
    </script>
    <?php
        include("connection.php");
        if (isset($_GET["Cod_Inteteresse"])) {
            $id = $_GET["Cod_Inteteresse"];
            $sql = "SELECT Cod_Inteteresse, fk_Cliente_Cod_Cliente, fk_Destino_Cod_Lugar, Comentario, DT_Adicao FROM se_interessa WHERE Cod_Inteteresse = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $CE_Cliente = $row['fk_Cliente_Cod_Cliente'];
                    $CE_Lugar = $row['fk_Destino_Cod_Lugar'];
                    $Comentario = $row['Comentario'];
                    $DT_Adicao = $row['DT_Adicao'];
                }
            }  
        }     
    ?>
    <h1>Edição de Blog</h1>
    <form id="form1" name="form1" method="post" action="interessa_edit_php.php">
        Codigo do Interessa: <?php echo $id?><input type="hidden" name="hidId" value="<?php echo $id?>"> <br>
        Chave Estrangeira do Cliente: <input type="number" id="numberCE_Cliente" name="numberCE_Cliente" value="<?php echo $CE_Cliente?>">
        Chave Estrangeira do Lugar: <input type="number" id="numberCE_Lugar" name="numberCE_Lugar" value="<?php echo $CE_Lugar?>">
        Comentario: <input type="text" id="txtComentario" name="txtComentario" value="<?php echo $Comentario?>">
        Data de Adição: <input type="date" id="dateDT_Adicao" name="dateDT_Adicao" value="<?php echo date('Y-m-d', strtotime($DT_Adicao))?>">
        <input type="submit" value="Enviar">
    </form>
    <script>
    </script>
</body>
</html>