<?php
    include("connection.php");

    session_start();
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: index.php");
    }

    $Nome = $_POST['txtNome'];
    $Cidade = $_POST['txtCidade'];
    $Estado = $_POST['txtEstado'];
    $Pais = $_POST['txtPais'];
    $Nivel_dificul = $_POST['selectNivel_dificul'];
    $Preco_aprox = $_POST['numberPreco_aprox'];
    $HTML_pagina = $_POST['txtHTML'];
    $Descricao = $_POST['txtDescricao'];


    try {
        $sql = "INSERT INTO destino (Nome_Lugar, Cidade, Estado, Pais, Descricao, Nivel_dificul, Preco_aprox, HTML_pagina) VALUES ('$Nome', '$Cidade', '$Estado', '$Pais', '$Descricao', $Nivel_dificul, $Preco_aprox, '$HTML_pagina' )";
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