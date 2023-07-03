<?php

session_start();
include 'conexao.php';
if (isset($_POST['logar'])) {
    if (!empty($_POST['email']) || !empty($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $comando = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";
        $enviar = mysqli_query($conn, $comando);
        $resultado = mysqli_fetch_assoc($enviar);
        if ($resultado) {
            $_SESSION['Codigo'] = $resultado['Codigo'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['sobrenome'] = $resultado['sobrenome'];
            $_SESSION['datadenasc'] = $resultado['datadenasc'];
            $_SESSION['estadocivil'] = $resultado['estadocivil'];
            $_SESSION['profissao'] = $resultado['profissao'];
            $_SESSION['nacionalidade'] = $resultado['nacionalidade'];
            $_SESSION['cel'] = $resultado['cel'];
            $_SESSION['tel'] = $resultado['tel'];
            $_SESSION['cidade'] = $resultado['cidade'];
            $_SESSION['rua'] = $resultado['rua'];
            $_SESSION['bairro'] = $resultado['bairro'];
            $_SESSION['ndacasa'] = $resultado['ndacasa'];
            $_SESSION['email'] = $resultado['email'];
            $_SESSION['email2'] = $resultado['email2'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['senha2'] = $resultado['senha2'];
            $_SESSION['indic'] = $resultado['indic'];


            header("location:logado/manual.php");
            exit;
        } else {
            $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Login ou Senha incorretos! Tente Novamente.</div>';
            header("location:index.php");
            exit;
        }
    } else {
        $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Algum campo ficou em branco! Tente Novamente.</div>';
        header("location:index.php");
        exit;
    }
}
?>