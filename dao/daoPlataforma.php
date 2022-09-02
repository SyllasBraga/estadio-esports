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
    public function delete($id)
    {
        $sql = "delete from plataforma where cod_plataforma = $id";
        $pst = conexao::getPreparededStatement($sql);
        if ($pst->execute()) {
            return true;
        }else{
            return false;
        }
    }      
    public function update(Plataforma $plataforma)
    {
        $sql = "update plataforma set nome_plataforma=? where cod_plataforma=?";
        $pst = conexao::getPreparededStatement($sql);
        $pst->bindValue(1, $plataforma->getNomePlataforma());
        $pst->bindValue(2, $plataforma->getCodPlataforma());
        if ($pst->execute()) {
            return true;
        }else{
            return false;
        }
    }       
}

?>