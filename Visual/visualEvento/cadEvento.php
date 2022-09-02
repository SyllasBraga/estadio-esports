<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo evento</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/cad.css">
</head>

<body>
    <?php include_once("../assets/components/header.php");
    include_once("../assets/components/main.php"); ?>
    <main>
        <div class="card-cad">
            <?php
            require_once '../../Modelo/evento.php';
            require_once '../../dao/daoEvento.php';
            require_once '../../dao/conexao.php';

            $nomeEvt = filter_input(INPUT_POST, 'nomeEVT');
            $dataInicioHora = filter_input(INPUT_POST, 'dataINICIO_HORA');
            $dataInicioDia = filter_input(INPUT_POST, 'dataINICIO');
            $dataInicio = $dataInicioDia .' ' .$dataInicioHora;
            $dataFimDia = filter_input(INPUT_POST, 'dataFIM');
            $dataFimHora = filter_input(INPUT_POST, 'dataFIM_HORA');
            $dataFim = $dataFimDia . ' '. $dataFimHora;
            $premiacao = filter_input(INPUT_POST, 'premiacao');
            $exclusivo = filter_input(INPUT_POST, 'exclusivo');
            $jogo = filter_input(INPUT_POST, 'jogo');
            $adm = filter_input(INPUT_POST, 'adm');

            $evt = new evento(
                null,
                $nomeEvt,
                $exclusivo,
                $premiacao,
                $dataInicio,
                $dataFim,
                $jogo,
                $adm
            );
            $daoEvt = new daoEvento;
            if ($daoEvt->inclui($evt)) {
                echo '<h2>Cadastro realizado com sucesso!</h2>';
            } else {
                echo '<h2>Erro no cadastro!</h2>';
            }
            ?>
            <div class="btn-actions">
                <button class="btn"><a href="../visualEvento/formEvento.php">Cadastrar novamente</a></button>
                <button class="btn"><a href="../visualEvento/listaEvento.php">Listar cadastros</a></button>
                <button class="btn"><a href="../../index.php">Voltar para a página inicial</a></button>
            </div>
        </div>
    </main>
    <?php include_once("../assets/components/footer.php"); ?>
</body>

</html>