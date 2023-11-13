<?php
    include("connection.php");
    session_start();
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: index.php");
    }
    $id = $_GET["Cod_Cliente"];
    
    if ($id <= 7) {
        echo '<script>alert("Não é possível deletar contas Administradoras!"); window.location.href = "users_lst.php";</script>';
        exit;
    }
    
    try {
        $sql = "DELETE FROM cliente WHERE Cod_Cliente = $id";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Operação concluída com sucesso."); window.location.href = "users_lst.php";</script>';
            exit;
        } else {
            throw new Exception('Ocorreu um erro ao executar a operação.');
        }
    } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'"); history.go(-1);</script>';
        exit;
    }
?>