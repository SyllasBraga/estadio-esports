<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo evento</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body>
    <?php include_once("../assets/components/header.php");
    include_once("../assets/components/main.php"); ?>
    <main>
        <div class="card-cadastro">
            <form class="form-cadastro" action="cadEvento.php" method="POST">
                <h2>Cadastro de eventos</h2>
                <div class="card-lbl">
                    <label class="lbl-item" for="nomeEVT">Nome do evento:</label>
                    <input class="ipt-text" type="text" name="nomeEVT" id="nomeEVT" required>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="dataINICIO" for='dataINICIO_HORA'>Início do evento:</label>
                    <input class="ipt-text" type="date" name="dataINICIO" id="dataINICIO" required>
                    <input class="ipt-text" type="time" name="dataINICIO_HORA" id = "dataINICIO_HORA" required>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="dataFIM" for="dataFIM_HORA">Fim do evento:</label>
                    <input class="ipt-text" type="date" name="dataFIM" id="dataFIM" pattern="\d{4}-\d{2}-\d{2}" required>
                    <input class="ipt-text" type="time" name="dataFIM_HORA" id = "dataFIM_HORA" pattern="\d{2}:\d{2}:\d{2}" required>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="exclusivo">Exclusivo da arena: </label>
                    <select name="exclusivo" id="exclusivo" required>
                        <option value="null">Selecione</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="jogo">Jogo: </label>
                    <select class="ipt-text" name="jogo" id="jogo" required>
                        <option value="null">Selecione</option>
                        <?php
                        require_once '../../dao/daoJogo.php';
                        require_once '../../dao/conexao.php';

                        $dao = new daoJogo();
                        $lista = $dao->listaTodosFormat();

                        foreach ($lista as $linha) {
                            echo '<option value="' . $linha['cod_jogo'] . '">' . $linha['nome_jogo'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="adm">Criado por: </label>
                    <select class="ipt-text" name="adm" id="adm" required>
                        <option value="null">Selecione</option>
                        <?php
                        require_once '../../dao/daoAdministrador.php';
                        require_once '../../dao/conexao.php';

                        $dao = new daoAdministrador();
                        $lista = $dao->listaTodos();

                        foreach ($lista as $linha) {
                            echo '<option value="' . $linha['cod_adm'] . '">' . $linha['nome_adm'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="btn-actions">
                    <button class="btn"><a href="../../index.php">Voltar ao início</a></button>
                    <button class="btn">Salvar</button>
                </div>
            </form>
        </div>
    </main>
    <?php include_once("../assets/components/footer.php") ?>
</body>

</html>