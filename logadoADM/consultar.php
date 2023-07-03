<?php
session_start();
include 'conexao.php';
        $Data = $_POST['data'];
        $horainicio = $_POST['horainicio'];
        $horafim = $_POST['horafim'];
        $Procedimento = $_POST['procedimento'];
        $codigopaciente = $_POST['codigopaciente'];
		
    $comando = "INSERT INTO consulta (data, horainicio, horafim, procedimento, codigopaciente) VALUES ('$Data', '$horainicio', '$horafim', '$Procedimento', '$codigopaciente')";
    $enviar = mysqli_query($conn, $comando); 

	
    if($enviar){
            header("location:consultar2.php");
        } else {
			$_SESSION['mensagem'] = '<div class="alert alert-success" role="alert">Erro na conexão com  servidor, por favor, tente novamente.</div>';
			header("location:agandaADM.php");
        }
?>