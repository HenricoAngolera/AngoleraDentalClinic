<?php

session_start();
include 'conexao.php';
if (isset($_POST['logar'])) {
    if (!empty($_POST['Nome']) || !empty($_POST['Senha'])) {
        $Nome = $_POST['Nome'];
        $Senha = $_POST['Senha'];

        $comando = "SELECT * FROM administrador WHERE Nome = '$Nome' and Senha = '$Senha'";
        $enviar = mysqli_query($conn, $comando);
        $resultado = mysqli_fetch_assoc($enviar);

        if ($resultado) {
            $_SESSION['Nome'] = $resultado['Nome'];
            $_SESSION['Cel'] = $resultado['Cel'];
            $_SESSION['Tel'] = $resultado['Tel'];
            $_SESSION['Senha'] = $resultado['Senha'];

            header("location:logadoADM/consulta.php");
            exit;
        } else {
            $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Login ou Senha incorretos! Tente Novamente.</div>';
            header("location:cadastroADM.php");
            exit;
        }
    } else {
        $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Algum campo ficou em branco! Tente Novamente.</div>';
        header("location:cadastroADM.php");
        exit;
    }
}
?>