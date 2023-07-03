<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Angolera Dental Clinic</title>
        <style>
            .coco{
                background-color:rgba(149, 90, 120,1);
            }
            .corloca{
                color: #aaaaaa;
                margin-right: 15px;
                transition:1s;
            }
            .corloca:hover{
                color:#ffffff;
            }
            span.cocaine{
                color:#ffffff;
            }
            #container3{
                width: 1300px;
                background-color: white;
                margin: 10px auto 10px auto;
                padding: 20px;
                box-shadow: 2px 2px 15px #955A78;    
            }
            #imagen{
                width:300px;
                height:230px;
            }
            .forte{
                font-weight: bolder;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="../_css/estiloindex.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    <nav class="navbar navbar-expand-lg coco">
        <a href="info.php"><img src="../_imagens/logotipo_dental_clinic.jpg"></a>
        <button style="background-color: #955A78" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="agenda.php">Agendar</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="enviada.php">Enviadas</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="confirmada.php">Confirmadas</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="mostraperfil.php">Meu Perfil</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="manual.php">Manual</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="info.php">Mais Informações</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="sair.php">Sair</a>
                </li>
            </ul>
            <span class="navbar-text cocaine">
                <?php
                session_start();
                include 'conexao.php';
                if (!empty($_SESSION['nome'])) {
                    $nome = $_SESSION['nome'];
                }
                ?>
                Olá, <?= $nome ?>!
            </span>
        </div>
    </nav>
</head>
<body>
    <div id="container3">
        <table class="table">
	<tr>
		<th colspan="5" style="text-align:center;"><h1>Consultas Confirmadas</h1></th>
	</tr>
	<tr>
		<th>Procedimento</th>
		<th>Data da consulta</th>
		<th>Hora do início</th>
		<th>Hora do Final</th>
                <th>Apagar</th>
        </tr>
	<tr>
	<?php
	$sql = "SELECT * FROM consulta JOIN cliente ON consulta.codigopaciente = cliente.Codigo";
	$s = mysqli_query($conn, $sql);
	while($consulta = mysqli_fetch_assoc($s)){
         $consulta['Codigo'] =  $consulta['Codigo'];
            if($consulta['Codigo'] == $consulta['codigopaciente']){
?>
<tr>
		<td><?php echo $consulta['procedimento'];?></td>
		<td><?php echo $consulta['data'];?></td>
		<td><?php echo $consulta['horainicio'];?></td>
		<td><?php echo $consulta['horafim'];?></td>
                <!--<td><form action="" method="POST"><button name="apagar" type="button" class="btn btn-danger">Excluir</button></form></td>-->
                <td>
<?php
 echo "<a href='proc_apagar_usuario.php?Codigo=" . $consulta['Codigo'] . "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>"?>
<button type="button" class="btn btn-xs btn-danger" style="margin-top: 0px; margin-left: 0px;">Apagar</button>
                <?php
               
                
                ?>
</td>
</tr>

	<?php
    }
}
    ?>
</table>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>