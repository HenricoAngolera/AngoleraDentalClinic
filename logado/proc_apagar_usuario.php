<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'Codigo', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_cliente = "DELETE FROM consulta WHERE Codigo ='$id'";
	$resultado_clientes = mysqli_query($conn, $result_cliente);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: confirmada.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: confirmada.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: confirmada.php");
}

