<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/lista.css">
</head>

<body>
    <?php include_once("../assets/components/header.php");
    include_once("../assets/components/main.php"); ?>
    <main>
        <div class="card-lista">
            <table class="table">
                <tr>
                    <th>Código: </th>
                    <th>Nome: </th>
                    <th>Data de início:</th>
                    <th>Data do fim:</th>
                    <th>Premiação: </th>
                    <th>Exclusivo: </th>
                    <th>Jogo: </th>
                    <th>Cadastrado por:</th>
                </tr>
                <?php
                require_once '../../dao/conexao.php';
                require_once '../../dao/daoEvento.php';
                require_once '../../Modelo/evento.php';

                $daoEvt = new daoEvento();
                $lista = $daoEvt->listaTodos();

                foreach ($lista as $linha) {
                    echo '<tr class="tr-content">';
                    echo '<td>' . $linha['cod_evt'] . '</td>';
                    echo '<td>' . $linha['nome_evt'] . '</td>';
                    echo '<td>' . $linha['duracaoINICIO'] . '</td>';
                    echo '<td>' . $linha['duracaoFIM'] . '</td>';
                    echo '<td>' . $linha['premiacao'] . '</td>';
                    echo '<td>' . $linha['exclusivo_arena'] . '</td>';
                    echo '<td>' . $linha['cod_jogo'] . '</td>';
                    echo '<td>' . $linha['cod_adm'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
            <div class="btn-actions">
                <button class="btn"><a href="../../index.php">Ir para a página inicial</a></button>
                <button class="btn"><a href="../visualEvento/formEvento.php">Salvar um novo item</a></button>
            </div>
        </div>

    </main>
    <?php
    include_once("../assets/components/footer.php");
    ?>
</body>

</html>