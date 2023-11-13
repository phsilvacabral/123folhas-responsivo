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
        if (isset($_GET["Cod_Lugar"])) {
            $id = $_GET["Cod_Lugar"];
            $sql = "SELECT Cod_Lugar, Nome_Lugar, Cidade, Estado, Pais, Nivel_dificul, Preco_aprox, HTML_pagina, Descricao FROM destino WHERE Cod_Lugar = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $Nome = $row['Nome_Lugar'];
                    $Cidade = $row['Cidade'];
                    $Estado = $row['Estado'];
                    $Pais = $row['Pais'];
                    $Nivel_dificul = $row['Nivel_dificul'];
                    $Preco_aprox = $row['Preco_aprox'];
                    $HTML_pagina = $row['HTML_pagina'];
                    $Descricao = $row['Descricao'];
                }
            }  
        }     
    ?>
    <h1>Edição de Lugar</h1>
    <form id="form1" name="form1" method="post" action="destino_edit_php.php" onsubmit="return verificar()">
        Codigo de Destino Atual: <?php echo $id?><input type="hidden" name="hidId" value="<?php echo $id?>"> <br>
        Nome: <input type="text" id="txtNome" name="txtNome" value="<?php echo $Nome?>" maxlength="50" required>
        Cidade: <input type="text" id="txtCidade" name="txtCidade" value="<?php echo $Cidade?>" maxlength="30" required>
        Estado: <input type="text" id="txtEstado" name="txtEstado" value="<?php echo $Estado?>" maxlength="30" required>
        Pais: <input type="text" id="txtPais" name="txtPais" value="<?php echo $Pais?>" maxlength="30" required>
        Descrição: 
        <textarea id="txtDescricao" name="txtDescricao" rows="5" cols="30" style="resize: none;"><?php echo $Descricao?></textarea>
        Nivel de Dificulade: 
        <select name="selectNivel_dificul">
            <option value="5" <?php if ($Nivel_dificul == '5') echo 'selected'; ?>>Nível 5</option>
            <option value="4" <?php if ($Nivel_dificul == '4') echo 'selected'; ?>>Nível 4</option>
            <option value="3" <?php if ($Nivel_dificul == '3') echo 'selected'; ?>>Nível 3</option>
            <option value="2" <?php if ($Nivel_dificul == '2') echo 'selected'; ?>>Nível 2</option>
            <option value="1" <?php if ($Nivel_dificul == '1') echo 'selected'; ?>>Nível 1</option>
        </select>
        Preço Aproximado: <input type="number" id="numberPreco_aprox" name="numberPreco_aprox" value="<?php echo $Preco_aprox?>" required>
        HTML da Pagina: 
        <textarea id="txtHTML" name="txtHTML" rows="5" cols="30" style="resize: none;"><?php echo $HTML_pagina?></textarea>
        <input type="submit" value="Enviar">
    </form>
    <script>
        const txtNome = document.getElementById('txtNome')
        const txtCidade = document.getElementById('txtCidade')
        const txtEstado = document.getElementById('txtEstado')
        const txtPais = document.getElementById('txtPais')
        function verificar() {
            if (isNomeValido(txtNome.value)){
                if(isNomeValido(txtCidade.value)){
                    if (isNomeValido(txtEstado.value)){
                        if (isNomeValido(txtPais.value)){
                            return true
                        } else {
                            window.alert('País inválido!')
                            return false
                        }
                    } else {
                        window.alert('Estado inválido!')
                        return false
                    }
                } else {
                    window.alert('Cidade inválido!')
                    return false
                }
            } else {
                window.alert('Nome inválido!')
                return false
            }
        }
        
        function isNomeValido(nome) {
            const reN = /^\w*[a-zA-ZÀ-ú\s]+$/
            return reN.test(nome)
        }
    </script>
</body>
</html>