<?php
include 'conexao.php';
if (isset($_POST['Registrar'])) {
    if (!empty($_POST['Nome']) || !empty($_POST['Sobrenome']) || !empty($_POST['Cel']) || !empty($_POST['Tel']) || !empty($_POST['senha']) || empty($_POST['senha2'])){
        $Nome = $_POST['Nome'];
        $Sobrenome = $_POST['Sobrenome'];
        $Cel = $_POST['Cel'];
        $Tel = $_POST['Tel'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        $comando = "INSERT INTO administrador(Nome, Sobrenome,Cel, Tel, senha, senha2) VALUES ('$Nome', '$Sobrenome', '$Cel', '$Tel', '$senha', '$senha2')";
        $enviar = mysqli_query($conn, $comando);
        if ($enviar) {
            echo '<div class="alert alert-success" role="alert">
                Cadastrado com sucesso! Pode realizar o seu login.
                </div>';
            header("location:indexs.php");
            exit;
        } else {
            echo 'Erro ao se cadastrar :(';
            header("location:cadastros.php");
            exit;
        }
    }
}
?>