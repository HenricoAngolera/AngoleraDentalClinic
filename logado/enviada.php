<html>
    <head>
        <title>Angolera Dental Clinic</title>
        <style>
            .coco{
                background-color:rgba(149, 90, 120,1);
            }
            .corloca{
                color:#aaaaaa;
                margin-right: 15px;
                transition:1s;
            }
            .corloca:hover{
                color:#ffffff;
                text-decoration: underline;
            }
            #container4{
                width: 800px;
                background-color: white;
                margin: 10px auto 10px auto;
                padding: 20px;
                box-shadow: 2px 2px 15px #955A78;    
            }
            #bunito{
                font-weight: bolder;
            }#secreto{
                color:#ffffff;
                bottom:0px;
            }
            span.cocaine{
                color:#ffffff;
            }
        </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg coco">
        <a href="index.php"><img src="../_imagens/logotipo_dental_clinic.jpg"/></a>
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
                }?>
                Olá, <?= $nome ?>!
            </span>
        </div>
    </nav>
</head>
<body>
    <div id="container4">
    <h1 style="text-align: center;">Suas solicitações de consultas:</h1>
    <table class="table">
	 <?php
	$sql = "SELECT * FROM agendamento";
	$s = mysqli_query($conn, $sql);
	while($consulta = mysqli_fetch_assoc($s)){
?>
        <tr>
            <th scope="col">Data</th>
            <th scope="col">Hora</th>
            <th scope="col">Sintomas</th>
            <th scope="col">Apagar</th>
        </tr>
        <tr>
            <td><?php echo $consulta['Data'];?></td>
            <td><?php echo $consulta['Horario'];?></td>
            <td><?php echo $consulta['Sintomas'];?></td>
            <td>
            <?php
            echo "<a href='proc_apagar_usuario2.php?Codigo=" . $consulta['Codigo'] . "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>"?>
<button type="button" class="btn btn-xs btn-danger" style="margin-top: 0px; margin-left: 0px;">Apagar</button>
</td>
        </tr>
			<?php
	}
    ?>
    </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>