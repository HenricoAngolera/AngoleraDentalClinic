<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="_css/estiloindex.css">
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
            #bunito{
                font-weight: bolder;
            }#secreto{
                color:#ffffff;
                bottom:0px;
            }
        </style>
        <meta charset="UTF-8">
        <title>Angolera Dental Clinic</title>
    <nav class="navbar navbar-expand-lg coco">
        <a href="index.php"><img src="_imagens/logotipo_dental_clinic.jpg"></a>
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
            </ul>
        </div>
    </nav>
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <div id="inicial">
        <fieldset>
            <h1>Bem-vindo Cliente!</h1>
            <div id="outro_campo">
                <h3>O que é esse programa? </h3>
                <p>Esse programa é uma adaptação do mesmo consultório que você já conhece,
                    agora, facilitando a forma em que você realiza o seu cadastro e 
                    também a forma em que você faz seu agendamento, na nova <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Angolera 
                        Dental Clinic.</a></p>
                <h3>Começando?</h3>
                <p>Para começar, realize seu cadastro clicando na opção <a id="bunito" style="color:#955A78;">Cadastrar</a> no menu acima.</p>
            </div>
            <aside>
                <?php
                include 'conexao.php';
                ?>
                <h3>Login:</h3>
                <div class="alert alert-success" role="alert">
                    Cadastrado com sucesso! Agora realize seu login.
                </div>
                <form action="validar.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserir email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha:</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Inserir senha">
                    </div>
                    <button name="logar" style="background-color: #955A78" style="margin-left:700px" type="submit" class="btn btn-primary">Logar</button>
                </form>
            </aside>

        </fieldset>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>