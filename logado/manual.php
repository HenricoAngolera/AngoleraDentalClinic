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
            #imagen{
                width:300px;
                height:230px;
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

    <div id="inicial">
            <h1>Bem-vindo <?=$nome?>!</h1>
            <h3>Por favor, leia antes de utilizar as funcionalidades do sistema.</h3>
            <h3>Como lidar com o Programa??</h3>
            <p>O programa funciona por meio de solicitações de agendamento enviadas de você para a secretária, que posteriormente virão a ser aceitas ou reagendadas. Confira o passo a passo abeixo de como funciona o programa:</p>
            <h3>Primeiro campo do menu: <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Agendar</a></h3>
            <p>Primeiro, você enviará a solicitação de agendamento para a secretária, você pode fazer isso na opção <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Agendar</a>, a primeira opção disposta no menu acima, da esquerda para a direita. Após clicar nela, você terá três campos para preenchimento, Data, Horário e Sintomas. Você deve completar estes campos de acordo com sua disponibilidade. Feito isso, o sistema lhe informará se a consulta foi marcada em
            um horário ou data disponível ou não. Se o horário está livre, ele é enviado para futura avaliação da secretária, que lhe dará o tempo necessário para a resolução do seu caso, de acordo com o campo Sintomas.</p>
            <h3>Segundo campo do menu: <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Enviadas</a></h3>
            <p>No campo <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Enviadas</a>, ele expôe as suas solicitações de consultas que foram enviadas para a secretária, porém, disponibiliza a opção de Excluir a solicitação da consulta, caso tenha errado algum dado dos campos
            enviados para a solicitação, apagando a mesma solicitação e possibilitando a criação de uma nova, dessa vez, com os dados desejados.</p>
            <h3>Terceiro campo do menu: <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Confirmadas</a></h3>
            <p>Nessa tela, você poderá ver as suas solicitações que foram aceitas pela secretária, como também, poderá ver os horários que ela mesma agendará para casos frequentes, como por exemplo: Manutenção. Por isso, visite-o regularmente.</p>
            <h3>Quarto campo do menu: <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Meu perfil</a></h3>
            <p>Em <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Meu perfil</a>, você poderá ver as suas informações inseridas anteriormente no cadastro. Também, poderás editar elas, mudando-as de acordo com seu interesse.</p>
            <h3>Quinto campo do menu: <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Manual</a></h3>
            <p>Por conhecidência, esse campo do menu te traz para esta tela, onde te ensinas o que cada campo do menu faz, para lhe fornecer um melhor contato com o <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Angolera Dental Clinic</a>.</p>
            <h3>Sexto campo do menu: <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Mais Informações</a></h3>
            <p>Este tela apenas dispôe algumas informações úteis para você, é bem interessante visitá-la.</p>
            <h3>Sétimo e último campo do menu: <a id="bonito" style="color:#955A78;" style="font-style:oblique;">Sair</a></h3>
            <p>Não tem muito o que se explicar nesta opção, você simplesmente sai da sua conta do Angolera Dental Clinic. Para entrar novamente, você deve realizar o login, isso é, inserir o e-mail e a senha inseridas no Cadastro.</p>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            </body>
            </html>