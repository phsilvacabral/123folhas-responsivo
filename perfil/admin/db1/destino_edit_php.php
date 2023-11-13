<?php
    include("connection.php");
    session_start();
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: index.php");
    }
    $id = $_POST["hidId"];
    $Nome = $_POST['txtNome'];
    $Cidade = $_POST['txtCidade'];
    $Estado = $_POST['txtEstado'];
    $Pais = $_POST['txtPais'];
    $Nivel_dificul = $_POST['selectNivel_dificul'];
    $Preco_aprox = $_POST['numberPreco_aprox'];
    $HTML_pagina = $_POST['txtHTML'];
    $Descricao = $_POST['txtDescricao'];
    try {
        $sql = "UPDATE Destino SET Nome_Lugar = '$Nome', Cidade = '$Cidade', Estado = '$Estado', Pais = '$Pais', Descricao = '$Descricao', Nivel_dificul = $Nivel_dificul, HTML_pagina = '$HTML_pagina', Preco_aprox = $Preco_aprox  WHERE Cod_Lugar = $id";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Operação concluída com sucesso."); window.location.href = "destino_lst.php";</script>';
            exit;
        } else {
            throw new Exception('Ocorreu um erro ao executar a operação.');
        }
    } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'"); history.go(-1);</script>';
        exit;
    }
?>