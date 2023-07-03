<?php
include 'conexao.php';
if (isset($_POST['Registrar'])) {
    if (!empty($_POST['nome']) || !empty($_POST['sobrenome']) || !empty($_POST['datadenasc']) || !empty($_POST['estadocivil']) || !empty($_POST['profissao']) || !empty($_POST['nacionalidade']) || !empty($_POST['cel']) || !empty($_POST['tel']) || !empty($_POST['telc']) || !empty($_POST['cidade']) || !empty($_POST['rua']) || !empty($_POST['bairro']) || !empty($_POST['ndacasa']) || !empty($_POST['endc']) || !empty($_POST['email']) || !empty($_POST['email2']) || !empty($_POST['senha']) || !empty($_POST['senha2']) || !empty($_POST['indic'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cel = $_POST['cel'];
        $tel = $_POST['tel'];
        $telc = $_POST['telc'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $ndacasa = $_POST['ndacasa'];
        $cidade = $_POST['cidade'];
        $endc = $_POST['endc'];
        $estadocivil = $_POST['estadocivil'];
        $email = $_POST['email'];
        $profissao = $_POST['profissao'];
        $datadenasc = $_POST['datadenasc'];
        $nacionalidade = $_POST['nacionalidade'];
        $email2 = $_POST['email2'];
        $indic = $_POST['indic'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        $comando = "INSERT INTO cliente(nome, sobrenome, datadenasc, estadocivil, profissao, nacionalidade, cel, tel, telc, cidade, rua, bairro, ndacasa, endc, email, email2, senha, senha2, indic) VALUES ('$nome', '$sobrenome', '$datadenasc', '$estadocivil', '$profissao', '$nacionalidade', '$cel', '$tel', '$telc', '$cidade', '$rua', '$bairro', '$ndacasa', '$endc', '$email', '$email2', '$senha', '$senha2', '$indic')";
        $enviar = mysqli_query($conn, $comando);
        if ($enviar) {
            echo '<div class="alert alert-success" role="alert">
                Cadastrado com sucesso! Pode realizar o seu login.
                </div>';
            header("location:indexp.php");
            exit;
        } else {
            echo 'Erro ao se cadastrar :(';
            header("location:cadastro.php");
            exit;
        }
    }
}
?>