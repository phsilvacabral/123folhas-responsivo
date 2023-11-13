<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Viagem</title>
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
    <h1>Adição de Viagem</h1>
    <form id="form1" name="form1" method="post" action="destino_add_php.php" onsubmit="return verificar()">
        Nome: <input type="text" id="txtNome" name="txtNome" value="" maxlength="50" required>
        Cidade: <input type="text" id="txtCidade" name="txtCidade" value="" maxlength="30" required>
        Estado: <input type="text" id="txtEstado" name="txtEstado" value="" maxlength="30" required>
        Pais: <input type="text" id="txtPais" name="txtPais" value="" maxlength="30" required>
        Descrição: 
        <textarea id="txtDescricao" name="txtDescricao" rows="5" cols="30" style="resize: none;"></textarea>
        Nivel de Dificulade: 
        <select name="selectNivel_dificul">
            <option value="5">Nível 5</option>
            <option value="4">Nível 4</option>
            <option value="3">Nível 3</option>
            <option value="2">Nível 2</option>
            <option value="1">Nível 1</option>
        </select>
        Preço Aproximado: <input type="number" id="numberPreco_aprox" name="numberPreco_aprox" value="" required>
        HTML da Pagina: 
        <textarea id="txtHTML" name="txtHTML" rows="5" cols="30" style="resize: none;"></textarea>
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