<html>
    <head>
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
            #container3{
                width: 1300px;
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
            label{
                font-size:15pt ;
                font-weight: bold;
                display: block;
                text-indent: 30px;
            }

        </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../_css/estiloindex.css"/>
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
                    <a style="font-size:18pt" class="nav-link corloca" href="agandaADM.php">Agendar</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="buscar.php">Buscar</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="consulta.php">Solicitações</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="confirmada.php">Confirmadas</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="cadastro.php">Cadastrar Cliente</a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="sair.php">Sair</a>
                </li>
            </ul>
            <span class="navbar-text cocaine">
                <?php
                session_start();
                include 'conexao.php';
                if (!empty($_SESSION['Nome'])) {
                    $nome = $_SESSION['Nome'];
                }
                ?>
                Seja bem vinda, <?= $nome ?>!
            </span>
        </div>
    </nav>
</head>
<body>
    <div id="container3">
        <table class="table">
            <tr>
                <th colspan="10" style="text-align:center;"><h1>Clientes Cadastrados</h1></th>
            </tr>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome(s)</th>
                <th scope="col">Celular</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
                <th scope="col">Apagar</th>
            </tr>
            <tr>
                <?php
                $sql = "SELECT * FROM cliente";
                $s = mysqli_query($conn, $sql);
                while ($consulta = mysqli_fetch_assoc($s)) {
                    ?>
                    <td><?php echo $consulta['Codigo']; ?></td>
                    <td><?php echo $consulta['nome']; ?></td>
                    <td><?php echo $consulta['sobrenome']; ?></td>
                    <td><?php echo $consulta['cel']; ?></td>
                    <td><?php echo $consulta['tel']; ?></td>
                    <td><?php echo $consulta['cidade']; ?></td>
                    <td><?php echo $consulta['email']; ?></td>
                    <td><?php echo $consulta['senha']; ?></td>
                    <td><form action="" method="POST"><button name="apagar" type="button" class="btn btn-danger">Excluir</button></form></td>
                </tr>
                <?php
            }
            ?>
        </table>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>