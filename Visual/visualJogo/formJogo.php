<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo gênero</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body>
    <?php include_once("../assets/components/header.php");
    include_once("../assets/components/main.php"); ?>
    <main>
        <div class="card-cadastro">
            <form class="form-cadastro" action="cadJogo.php" method="POST">
                <h2>Cadastro de jogos</h2>
                <div class="card-lbl">
                    <label class="lbl-item" for="nome">Nome jogo:</label>
                    <input class="ipt-text" type="text" name="nome" id="nome" required>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="plataforma">Plataforma: </label>
                    <select class="ipt-text" name="plataforma" id="plataforma" required>
                        <option value="null">Selecione</option>
                        <?php
                        require_once '../../dao/daoPlataforma.php';
                        require_once '../../dao/conexao.php';

                        $dao = new daoPlataforma();
                        $lista = $dao->listaTodos();

                        foreach ($lista as $linha) {
                            echo '<option value="' . $linha['cod_plataforma'] . '">' . $linha["nome_plataforma"] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="genero">Gênero: </label>
                    <select class="ipt-text" name="genero" id="genero" required>
                        <option value="null">Selecione</option>
                        <?php
                        require_once '../../dao/daoGenero.php';
                        require_once '../../dao/conexao.php';

                        $dao = new daoGenero();
                        $lista = $dao->listaTodos();

                        foreach ($lista as $linha) {
                            echo '<option value="' . $linha['cod_gen'] . '">' . $linha["nome_gen"] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="adm">Administrador: </label>
                    <select class="ipt-text" name="adm" id="adm" required>
                        <option value="null">Selecione</option>
                        <?php
                        require_once '../../dao/daoAdministrador.php';
                        require_once '../../dao/conexao.php';

                        $dao = new daoAdministrador();
                        $lista = $dao->listaTodos();

                        foreach ($lista as $linha) {
                            echo '<option value="' . $linha['cod_adm'] . '">' . $linha["nome_adm"] . '</option>';
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