<?php
    include("connection.php");
    session_start();
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: index.php");
    }
    $id = $_POST["hidId"];
    $Titulo = $_POST['txtTitulo'];
    $Autor = $_POST['txtAutor'];
    $Data_pub = $_POST['dateData_Pub'];
    $dateData_Pub = date('Y-m-d', strtotime($Data_pub));
    $Gostei = $_POST['numberGostei'];
    $NGostei = $_POST['numberNGostei'];
    $HTML_pagina = $_POST['txtHTML'];
    try {
        $sql = "UPDATE Blog SET Titulo = '$Titulo', Autor = '$Autor', Data_publicada = '$dateData_Pub', Gostei = $Gostei, Deslike = $NGostei, HTML_blog = '$HTML_pagina' WHERE Cod_blog = $id";
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