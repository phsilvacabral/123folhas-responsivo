<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: verdana;
        }
        h1 {
            text-align: center;
        }

        div {
            align-items: center;
            justify-content: center;
            text-align: center;
            display: grid;
        }

        input {
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Efetue seu Login.</h1>
    <form name="form1" method="post" action="login_php.php">
        <div>
            <tr>
                <td>Login:</td>
                <td>
                    <input type="email" name="txtLogin" maxlength="100">
                </td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td>
                    <input type="password" name="txtPassword" maxlength="20">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar">
                </td>
           </tr>
    </div>
    </form>
</body>
</html>