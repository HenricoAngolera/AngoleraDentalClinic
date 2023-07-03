<?php
include 'conexao.php';
$comando = "SELECT * FROM cliente ORDER BY id DESC";
$enviar = mysqli_query($conn, $comando);
$resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <table>
            <tr colspan="19">
                <td>Clientes Cadastados no Sistema</td>
            </tr>
            <tr>
                <th>Nome</th>
                <th>Sobrenomes</th>
                <th>Data de Nascimento</th>
                <th>Estado Civil</th>
                <th>Profissão</th>
                <th>Nacionalidade</th>
                <th>Celular</th>
                <th>Telefone</th>
                <th>Telefone Comercial</th>
                <th>Cidade</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Número da casa</th>
                <th>Endereço Comercial</th>
                <th>E-mail</th>
                <th>Comfirmação de e-mail</th>
                <th>Senha</th>
                <th>Comfirmação de senha</th>
                <th>Indicação</th>
            </tr>
            <?php
            foreach ($resultado as $lista) {
                $nome = $lista['nome'];
                $sobrenome = $lista['sobrenome'];
                $cel = $lista['cel'];
                $tel = $lista['tel'];
                $telc = $lista['telc'];
                $rua = $lista['rua'];
                $bairro = $lista['bairro'];
                $ndacasa = $lista['ndacasa'];
                $cidade = $lista['cidade'];
                $endc = $lista['endc'];
                $estadocivil = $lista['estadocivil'];
                $email = $lista['email'];
                $email2 = $lista['email2'];
                $profissao = $lista['profissao'];
                $datadenasc = $lista['datadenasc'];
                $nacionalidade = $lista['nacionalidade'];
                $senha = $lista['senha'];
                $senha2 = $lista['senha2'];
                $indic = $lista['indic'];
                ?>
                <tr>
                    <td><?= $nome ?></td>
                    <td><?= $sobrenome ?></td> 
                    <td><?= $cel ?></td>
                    <td><?= $tel ?></td>
                    <td><?= $telc ?></td>
                    <td><?= $rua ?></td>
                    <td><?= $bairro ?></td>
                    <td><?= $ndacasa ?></td>
                    <td><?= $cidade ?></td>
                    <td><?= $endc ?></td>
                    <td><?= $estadocivil ?></td>
                    <td><?= $email ?></td>
                    <td><?= $profissao ?></td>
                    <td><?= $datadenasc ?></td>
                    <td><?= $nacionalidade ?></td>
                    <td><?= $senha ?></td>
                    <td><?= $senha2 ?></td>
                    <td><?= $indic ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>