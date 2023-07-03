<html>
    <head>
        <title>Angolera Dental Clinic</title>
        <link rel="stylesheet" type="text/css" href="_css/estiloindex.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
            }
            .facil{
                display:block;
                text-align:center;
            }
            input[type=text], input[type=date], input[type=password], input[type=email]{
                margin-bottom: 20px;
            }
            select{
                margin-bottom: 20px;
            }

        </style>
        <meta charset="UTF-8">
    <nav class="navbar navbar-expand-lg coco">
        <a href="index.php"><img src="_imagens/logotipo_dental_clinic.jpg"/></a>
        <button style="background-color: #955A78" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="cadastro.php">Cadastrar</a>
                </li>
                <li class="nav-item active">
                    <a style="font-size:18pt" class="nav-link corloca" href="index.php">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a style="font-size:18pt" class="nav-link corloca" href="cadastroADM.php">Login ADM</a>
                </li>
            </ul>
        </div>
    </nav>
</head>
<body>
    <div class="container">
        <div id="campo-todo">
            <h1 style="text-align:center">Preencha o Formulário a seguir </h1>
            <h4 style="text-align:center">Algumas informações necassárias para nós: </h4>
            <div class="container1">
                <?php
                include 'conexao.php';
                if(!empty($_SESSION['mensagem'])){
                    echo $_SESSION['mensagem'];
                    unset($_SESSION['mensagem']);
                }
                ?>
                <form action="listarcad.php" method="post">
                    <div class="facil">
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">Nome(s):</label>
                                <input name="nome" type="text" class="form-control" id="inputAddress" placeholder="Insira seu nome" required autofocus>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress2">Sobrenome(s):</label>
                                <input name="sobrenome" type="text" class="form-control" id="inputAddress2" placeholder="Insira seu sobrenome" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">Data de nascimento:</label>
                                <input name="datadenasc" type="date" class="form-control" id="inputAddress" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">Celular:</label>
                                <input name="cel" type="text" class="form-control" id="inputAddress" placeholder="Insira seu celular" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress2">Telefone:</label>
                                <input name="tel" type="text" class="form-control" id="inputAddress2" placeholder="Insira seu telefone" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress2">Cidade:</label>
                                <input name="cidade" type="text" class="form-control" id="inputAddress2" placeholder="Insira sua cidade natal" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">Rua:</label>
                                <input name="rua" type="text" class="form-control" id="inputAddress" placeholder="Insira a rua onde você mora" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress2">Bairro:</label>
                                <input name="bairro" type="text" class="form-control" id="inputAddress2" placeholder="Insira seu bairro" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">Número da casa:</label>
                                <input name="ndacasa" type="text" class="form-control" id="inputAddress" placeholder="Insira o número da sua casa" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">E-mail:</label>
                                <input name="email" type="email" class="form-control" id="inputAddress" placeholder="Insira seu e-mail" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="inputAddress">Senha:</label>
                                <input name="senha" type="password" class="form-control" id="inputAddress" placeholder="Insira sua senha" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <td><label for="inputAddress">Indicado por:</label>
                                    <input name="indic" type="text" class="form-control" id="inputAddress" placeholder="Insira quem indicou a nossa clínica para você" required>
                            </div>
                        </div>                      
                        <br/>
                        <div id="botaumzinho">
                            <br><button type="submit" class="btn btn-success" name="Registrar">Registrar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>