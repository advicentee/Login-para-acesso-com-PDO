<?php
session_start();

//validado se o usuário fez sessão
require_once 'validacao.php';
if (!isset($_SESSION['nome'])){
    header("Location:login.php");
}

//validando o login
if(isset($_SESSION['nome'])){
    $sql = $conn->prepare("SELECT * FROM dados WHERE nome=:nome");
        $sql->execute(array(':nome'=>$_SESSION['nome']));
        $dados=$sql->fetch(PDO::FETCH_ASSOC);

        //criando uma variável para pegar os dados
        $res = NULL;
        if (count($dados) > 0){
            $dados = $res ;
        }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Somente Administradores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Olá, <?php echo $_SESSION['nome'];?> <a href="sair.php" title="">Sair</a> </h1>
    <h2>somente pessoas autorizadas...</h2>
</div>

</body>
</html>