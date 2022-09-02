<?php
    require_once './conexao.php';
    require_once './daoGenero.php';
    require_once '../Modelo/genero.php';
    
    $dao = new daoGenero();

    $dao->update(1, 'FPS');



?>