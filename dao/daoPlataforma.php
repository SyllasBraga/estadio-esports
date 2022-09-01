<?php

class daoPlataforma
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparededStatement('select * from plataforma;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(Plataforma $plataforma)
    {
        $sql = 'insert into plataforma (nome_plataforma) values (?);';
        $pst = conexao::getPreparededStatement($sql);
        $pst->bindValue(1, $plataforma->getNomePlataforma());
        if ($pst->execute()) {
            return true;
        }else{
            return false;
        }
    }       
}

?>