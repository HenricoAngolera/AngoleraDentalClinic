<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "angolera dental clinic";
$conexao = mysqli_connect($host, $user, $password, $database);
if(!conexao){
    echo "Conexao não estabelecida.";
}
?>
<?php
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = ("SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'");
$row = mysql_num_rows($sql);
if($row > 0){
    session_start();
    $_SESSION['email']=$_POST['email'];
    $_SESSION['senha']=$_POST['senha'];
    echo "Você foi autenticado com sucesso";
    echo "<script>loginsuccessfuly()</script>";
}
?>