<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img_principais/icon_logo.png" type="image/x-icon">
    <title>Perfil</title>
</head>

<html>
    <body>

    <?php
        $conn = new mysqli("localhost", "root", "PUC@1234", "123folhas");
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "SELECT Nome, Email FROM Cliente WHERE Cod_Cliente = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nome = $row["Nome"];
            $email = $row["Email"];
        } else {
            $nome = "Nenhum resultado encontrado";
            $email = "";
        }

        $conn->close();
    ?>




            <div id="div_perfil">

                <span id="voltar_home"><a href="../">&times;</a></span>

                <a title="Voltar à Home" href="../" ><img src="../img_principais/logo_login.png" alt="Logo 123 Folhas" id="logo"></a>

                <div id="user_name">
                    <img src="../img_principais/perfil_padrao.jpg" alt="foto de perfil" id="foto_perfil">

                    <div id="nome_email">
                        <p id="nome_completo">Nome completo do usuário</p>
                        <p id="email_user">email do usuário</p>

                        <div id="botoes_editar_admin">
                            <a href="editar/" id="botao_editar">Editar</a>
                            <a href="admin/" id="botao_admin">Admin</a>
                        </div>

                    </div>
                </div>



        <script>
            document.getElementById("nome_completo").textContent = "<?php echo $nome; ?>";
            document.getElementById("email_user").textContent = "<?php echo $email; ?>";
        </script>


                <div id="destinos_salvos">
                    <span id="titulo_destinos">Destinos salvos</span>

                    <a href="queroir/"><div class="quero_fui"><img src="../img_principais/icone_queroir.png" alt="icone quero ir"> <p>Quero ir</p><span>11 destinos</span></div></a>

                    <a href="jafui/"><div class="quero_fui"><img src="../img_principais/icone_jafui.png" alt="icone já fui"><p>Já fui</p><span>22 destinos</span></div></a>
                </div>

                <span id="botao_sair"><a href="../">Sair</a></span>

                <p id="text123"><a href="../">&copy;123folhas</a></p>
            </div>
            
            
    </body>
</html>