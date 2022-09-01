<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo jogo</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/cad.css">
</head>

<body>
    <?php include_once("../assets/components/header.php");
    include_once("../assets/components/main.php"); ?>
    <main>
        <div class="card-cad">
            <?php
            require_once '../../Modelo/jogo.php';
            require_once '../../dao/daoJogo.php';
            require_once '../../dao/conexao.php';

            $nome = filter_input(INPUT_POST, 'nome');
            $plataforma = filter_input(INPUT_POST, 'plataforma');
            $genero = filter_input(INPUT_POST, 'genero');
            $adm = filter_input(INPUT_POST, 'adm');

            $jogo = new jogo($nome, $plataforma, $genero, $adm);
            $daoJogo = new daoJogo();
            if ($daoJogo->inclui($jogo)) {
                echo '<h2>Cadastro realizado com sucesso!</h2>';
            } else {
                echo '<h2>Erro no cadastro!</h2>';
            }
            ?>
            <div class="btn-actions">
                <button class="btn"><a href="./formJogo.php">Cadastrar novamente</a></button>
                <button class="btn"><a href="./listaJogo.php">Listar cadastros</a></button>
                <button class="btn"><a href="../../index.php">Voltar para a página inicial</a></button>
            </div>
        </div>
    </main>
    <?php include_once("../assets/components/footer.php"); ?>
</body>

</html>