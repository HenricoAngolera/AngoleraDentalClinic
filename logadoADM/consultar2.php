<?php
session_start();
include 'conexao.php';
    $comando2 = "SELECT * FROM cliente WHERE codigopaciente = '$codigopaciente'";
	$enviar = mysqli_query($conn, $comando2);
	$resultado = mysqli_fetch_assoc($enviar);
	if ($resultado){
		$_SESSION['mensagem'] = '<div class="alert alert-danger" role="alert">Erro ao envio para o servidor, por favor, tente novamente mais tarde.</div>';
		header("location:agandaADM.php");
	}else{
		$_SESSION['mensagem'] = '<div class="alert alert-success" role="alert">Sua consulta foi enviada! Aguarde a chegada do paciente.</div>';
		header("location:agandaADM.php");
	}
?>