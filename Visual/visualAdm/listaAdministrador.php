<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
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
                    <th>Idade: </th>
                    <th>Salario: </th>
                </tr>
                <?php
                require_once '../../dao/conexao.php';
                require_once '../../dao/daoAdministrador.php';
                require_once '../../Modelo/administrador.php';

                $daoAdm = new daoAdministrador();
                $lista = $daoAdm->listaTodos();

                foreach ($lista as $linha) {
                    echo '<tr class="tr-content">';
                    echo '<td>' . $linha['cod_adm'] . '</td>';
                    echo '<td>' . $linha['nome_adm'] . '</td>';
                    echo '<td>' . $linha['idade'] . '</td>';
                    echo '<td>' . $linha['salario'] . '</td>';
                }
                ?>
            </table>
            <div class="btn-actions">
                <button class="btn"><a href="../../index.php">Ir para a página inicial</a></button>
                <button class="btn"><a href="./formCadAdm.php">Salvar um novo item</a></button>
            </div>
        </div>

    </main>
    <?php
    include_once("../assets/components/footer.php");
    ?>
</body>

</html>