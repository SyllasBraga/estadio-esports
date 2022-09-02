<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/lista.css">
</head>

<body>
    <?php include_once("../assets/components/header.php");
    include_once("../assets/components/main.php"); ?>
    <main>
        <div class="card-lista">
            <h2>Listagem de jogos</h2>
            <table class="table">
                <tr>
                    <th>Código: </th>
                    <th>Nome: </th>
                    <th>Plataforma: </th>
                    <th>Gênero: </th>
                    <th>Cadastrado por:</th>
                </tr>
                <?php
                require_once '../../dao/conexao.php';
                require_once '../../dao/daoJogo.php';
                require_once '../../Modelo/jogo.php';

                $daoJogo = new daoJogo();
                $lista = $daoJogo->listaTodos();

                foreach ($lista as $linha) {
                    echo '<tr class="tr-content">';
                    echo '<td>' . $linha['cod_jogo'] . '</td>';
                    echo '<td>' . $linha['nome_jogo'] . '</td>';
                    echo '<td>' . $linha['nome_plataforma'] . '</td>';
                    echo '<td>' . $linha['nome_gen'] . '</td>';
                    echo '<td>' . $linha['nome_adm'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
            <div class="btn-actions">
                <button class="btn"><a href="../../index.php">Ir para a página inicial</a></button>
                <button class="btn"><a href="./formJogo.php">Salvar um novo item</a></button>
            </div>
        </div>

    </main>
    <?php
    include_once("../assets/components/footer.php");
    ?>
</body>

</html>