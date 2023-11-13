<?php
    include("connection.php");
    session_start();
    if (!isset($_SESSION["Cod_Cliente"])) {
        header("Location: index.php");
    }
    $id = $_POST["hidId"];
    $CE_Cliente = $_POST['fk_Cliente_Cod_Cliente'];
    $CE_Lugar = $_POST['fk_Destino_Cod_Lugar'];
    $Comentario = $_POST['Comentario'];
    $DT_Adicao = $_POST['DT_Adicao'];

    try {
        $sql = "UPDATE se_interessa SET fk_Cliente_Cod_Cliente = '$CE_Cliente', fk_Destino_Cod_Lugar = '$CE_Lugar', Comentario = '$Comentario', DT_Adicao = $DT_Adicao  WHERE Cod_Inteteresse = $id";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Operação concluída com sucesso."); window.location.href = "interessa_lst.php";</script>';
            exit;
        } else {
            throw new Exception('Ocorreu um erro ao executar a operação.');
        }
    } catch (Exception $e) {
        echo '<script>alert("'.$e->getMessage().'"); history.go(-1);</script>';
        exit;
    }
?>