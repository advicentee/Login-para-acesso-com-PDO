
<?php
session_start();

//validando se o usuário já tem sessão aberta
if (isset($_SESSION['nome'])){
    header("Location:index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form method="post" enctype="multipart/form-data" action="validacao.php">

        <h1>Minha Logo</h1>

        <p><label for="nome">UserName:</label>
        <input type="text" id="nome" name="nome"></p>

        <p><label for="senha">Password:</label>
            <input type="text" id="senha" name="senha"></p>
        <p><button type="submit" id="logar" name="logar">Fazer Login</button></p>
    </form>
    <div class="erro"></div>
</div>

</body>
</html>