<?php
session_start();
include 'conexao.php';
if(isset($_POST['enviar'])){
    if(!empty($_POST['Data']) || !empty($_POST['Horario']) || !empty($_POST['Sintomas'])){
        $Data = $_POST['Data'];
        $Horario = $_POST['Horario'];
        $Sintomas = $_POST['Sintomas'];
    
    $comando = "INSERT INTO agendamento(Data, Horario, Sintomas) VALUES ('$Data','$Horario','$Sintomas')";
    $enviar = mysqli_query($conn, $comando);
    if($enviar){
            $_SESSION['Data'] = $enviar['Data'];
            $_SESSION['Horario'] = $enviar['Horario'];
            $_SESSION['Sintomas'] = $enviar['Sintomas'];
        $_SESSION['mensagem'] = '<div class="alert alert-success" role="alert">Enviado para a avaliação! Aguarde enquanto analizamos a disponibilidade desse horário.</div>';
            header("location:agenda.php");
            exit;
        } else {
            $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Erro ao envio para o servidor, por favor, tente novamente mais tarde.</div>';
            header("location:agenda.php");
            exit;
        }
    } else {
        $_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Algum campo ficou em branco! Tente novamente.</div>';
        header("location:agenda.php");
        exit;
    }
}