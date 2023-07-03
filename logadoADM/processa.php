<?php
	include_once("conexao.php");
	$Codigo = mysqli_real_escape_string($conn, $_POST['Codigo']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$sobrenome = mysqli_real_escape_string($conn, $_POST['sobrenome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$cel = mysqli_real_escape_string($conn, $_POST['cel']);
	$tel = mysqli_real_escape_string($conn, $_POST['tel']);
	$datadenasc = mysqli_real_escape_string($conn, $_POST['datadenasc']);
	// echo "$idUsu - $nome - $sobrenome - $email - $cep - $tel - $data - $sexo";
	$result_clientes = "UPDATE cliente SET nome='$nome', sobrenome='$sobrenome', email='$email', cel='$cel',  tel='$tel', datadenasc='$datadenasc' WHERE Codigo = '$Codigo'";
	
	$resultado_clientes = mysqli_query($conn, $result_clientes);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AngoleradentaClinic/logadoADM/teste.php'>
				<script type=\"text/javascript\">
					alert(\"Curso alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/AngoleradentaClinic/logadoADM/teste.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>