<?php

session_start();
include 'conexao.php';
if (isset($_POST['Registrar'])) {
    if (!empty($_POST['nome']) || !empty($_POST['sobrenome']) || !empty($_POST['datadenasc']) || !empty($_POST['cel']) || !empty($_POST['tel']) || !empty($_POST['cidade']) || !empty($_POST['rua']) || !empty($_POST['bairro']) || !empty($_POST['ndacasa']) || !empty($_POST['email']) || !empty($_POST['senha']) || !empty($_POST['indic'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cel = $_POST['cel'];
        $tel = $_POST['tel'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $ndacasa = $_POST['ndacasa'];
        $cidade = $_POST['cidade'];
        $email = $_POST['email'];
        $datadenasc = $_POST['datadenasc'];
        $indic = $_POST['indic'];
        $senha = $_POST['senha'];
        $comando = "INSERT INTO cliente(nome, sobrenome, datadenasc, cel, tel, cidade, rua, bairro, ndacasa, email, senha, indic) VALUES ('$nome', '$sobrenome', '$datadenasc', '$cel', '$tel', '$cidade', '$rua', '$bairro', '$ndacasa', '$email', '$senha', '$indic')";
        $enviar = mysqli_query($conn, $comando);
        if ($enviar) {
                $_SESSION['mensagem'] = '<div class="alert alert-success" role="alert">Cadastrado com sucesso! Pode realizar o seu login.</div>';
                header("location:index.php");
                exit;
            } else {
                $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Erro na conexão com o servidor, tente novamente mais tarde.</div>';
                header("location:cadastro.php");
                exit;
            }
    } else {
        $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Algum campo ficou em branco! Tente novamente.</div>';
        header("location:cadastro.php");
        exit;
    }
}
?>