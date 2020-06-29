/*
====================
Autor: Adriano Vicente
Ano: 2020
====================
*/
<?php
session_start();

//conectando com o banco
$host = 'localhost';
$dbname = 'login';
$user = 'SeuNomeDeUsuario';
$pass = 'SuAsEnHa';

try {
    $conn = new PDO("mysql:dbname=$dbname; host=$host", $user, $pass);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Erro ao conectar com o banco de dados ".$e->getMessage();
}


if (isset($_POST['logar'])){
    $msg = "";
    $nome = htmlspecialchars($_POST['nome']);
    $senha = htmlspecialchars($_POST['senha']);

    if (!empty($nome) && !empty($senha)) {
        $sql = $conn->prepare("SELECT * FROM dados WHERE nome=:nome && senha=:senha");
        $sql->execute(array(':nome' => $nome, ':senha' => $senha));

        $resulatdo = $sql->fetch(PDO::FETCH_ASSOC);

        if (count($resulatdo) > 0) {
            $_SESSION['nome'] = $resulatdo['nome'];
            header("Location:index.php");

        }else {
            $msg = "Por favor preencha todos campos ";
            header("Location:login.php");
        }
    }else{
        $msg = "OOPS VoCê Tá SeM sOrTe..!!!";
        header("Location:login.php");
    }
}
