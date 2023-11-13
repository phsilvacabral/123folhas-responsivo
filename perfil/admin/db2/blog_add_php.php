<?php
    include("connection.php");

    session_start();
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: index.php");
    }

    $Titulo = $_POST['txtTitulo'];
    $Autor = $_POST['txtAutor'];
    $Data_Pub = $_POST['dateData_Pub'];
    $dateData_Pub = date('Y-m-d', strtotime($Data_Pub));
    $Gostei = $_POST['numberGostei'];
    $NGostei = $_POST['numberNGostei'];
    $HTML_pagina = $_POST['txtHTML'];


    try {
        $sql = "INSERT INTO Blog (Titulo, Autor, Data_publicada, Gostei, Deslike, HTML_blog ) VALUES ('$Titulo', '$Autor', '$dateData_Pub', $Gostei, $NGostei, '$HTML_pagina' )";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Operação concluída com sucesso."); window.location.href = "blog_lst.php";</script>';
            exit;
        } else {
            throw new Exception('Ocorreu um erro ao executar a operação.');
        }
    } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'"); history.go(-1);</script>';
        exit;
    }
    
?>