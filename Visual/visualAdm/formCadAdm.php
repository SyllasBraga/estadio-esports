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
            <form class="form-cadastro" action="cadAdm.php">
                <h2>Cadastro de administradores</h2>
                <div class="card-lbl">
                    <label class="lbl-item" for="nome">Nome:</label>
                    <input class="ipt-text" type="text" name="nome" id="nome" required>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="idade">Idade:</label>
                    <input class="ipt-text" type="text" name="idade" id="idade" required>
                </div>
                <div class="card-lbl">
                    <label class="lbl-item" for="salario">Salário:</label>
                    <input class="ipt-text" type="text" name="salario" id="salario" required>
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