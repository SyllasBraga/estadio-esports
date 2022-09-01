<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estádio de E-Sports</title>
    <link rel="stylesheet" href="./assets/style/index.css">
</head>

<body>
    <div class="header">
        <div class="menu" id="menu">
            <input type="checkbox" id="toogle">
            <label for="toogle" class="menu-hamburguer" id="menu-hamburguer">
                <div class="trace" id="trace1"></div>
                <div class="trace" id="trace2"></div>
                <div class="trace" id="trace3"></div>
            </label>
        </div>
        <div class="page-title">
            <h1>Área Administrativa</h1>
        </div>
        <div class="arena-name">
            <h3>Estadio de E-Sports</h3>
        </div>
    </div>
    <div class="container-menu" id="container-menu">
        <div class="side-bar">
            <div class="item-menu" id="btn_cad">Cadastrar</div>
            <div class="item-menu" id="btn_list">Listar</div>
        </div>
        <div class="menu-itens" id="menu-itens-cad">
            <h2>Cadastro</h2>
            <div class="item"><a href="./Visual/visualAdm/formCadAdm.php">Administrador</a></div>
            <div class="item"><a href="./Visual/visualEvento/formEvento.php">Evento</a></div>
            <div class="item"><a href="./Visual/visualGenero/formGen.php">Gênero</a></div>
            <div class="item"><a href="./Visual/visualJogo/formJogo.php">Jogo</a></div>
            <div class="item"><a href="./Visual/visualPlataforma/formPlataforma.php">Plataforma</a></div>
        </div>
        <div class="menu-itens" id="menu-itens-list">
            <h2>Listagem</h2>
            <div class="item"><a href="./Visual/visualAdm/listaAdministrador.php">Administrador</a></div>
            <div class="item"><a href="./Visual/visualEvento/listaEvento.php">Evento</a></div>
            <div class="item"><a href="./Visual/visualGenero/listaGenero.php">Gênero</a></div>
            <div class="item"><a href="./Visual/visualJogo/listaJogo.php">Jogo</a></div>
            <div class="item"><a href="./Visual/visualPlataforma/listaPlataforma.php">Plataforma</a></div>
        </div>
    </div>
    <main>
        <div class="msg-wellcome">
            <div class="evts-info">
                <h1>Próximos eventos:</h1>
            </div>
        </div>
        <div class="section-evts">
        <div class="container-evts">
            <?php 

                require_once './dao/conexao.php';
                require_once './dao/daoEvento.php';

                $daoEvt = new daoEvento();

                $listaEvts = $daoEvt->listaTodos();
                foreach ($listaEvts as $linha) { 
                    echo '<div class="card-evt">' ;
                    echo ' <div class="evt-name">';
                    echo '<h4>' .$linha['nome_evt'] .'</h4>';
                    echo '</div>';
                    echo '<div class="evt-infos">';
                    echo '<p>Data: '. $linha['duracaoINICIO'] .'</p>';
                    echo '<p>Jogo: ' .$linha['cod_jogo'] . '</p>';
                    echo '<p>Premiação: R$'.$linha['premiacao'] .'</p>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
    <footer>
        <h3>&copy; Copyright 2022. Desenvolvido por Syllas Braga</h3>
    </footer>
    <script src="./assets/script/script.js"></script>
</body>

</html>