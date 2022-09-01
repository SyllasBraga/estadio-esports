<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo administrador</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/cad.css">
</head>

<body>
    <?php include_once("../assets/components/header.php");
    include_once("../assets/components/main.php"); ?>
    <main>
        <div class="card-cad">
            <?php

            require_once '../../dao/daoAdministrador.php';
            require_once '../../dao/conexao.php';

            $nomeAdm = filter_input(INPUT_POST, 'nome');
            $idade = filter_input(INPUT_POST, 'idade');
            $salario = filter_input(INPUT_POST, 'salario');

            $adm = new administrador($nomeAdm, $idade, $salario);
            $daoAdm = new daoAdministrador();
            if ($daoAdm->inclui($adm)) {
                echo '<h2>Cadastro realizado com sucesso!</h2>';
            } else {
                echo '<h2>Erro no cadastro!</h2>';
            }
            ?>
            <div class="btn-actions">
                <button class="btn"><a href="./formCadAdm.php">Cadastrar novamente</a></button>
                <button class="btn"><a href="./listaAdministrador.php">Listar cadastros</a></button>
                <button class="btn"><a href="../../index.php">Voltar para a página inicial</a></button>
            </div>
        </div>
    </main>
    <?php include_once("../assets/components/footer.php"); ?>
</body>

</html>