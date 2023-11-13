<?php
    include("connection.php");
    session_start();
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: index.php");
    }
    $id = $_GET["Cod_Lugar"];
    
    try {
        $sql = "DELETE FROM destino WHERE Cod_Lugar = $id";
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