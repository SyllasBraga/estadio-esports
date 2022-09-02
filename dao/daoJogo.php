<?php

class daoJogo
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparededStatement('SELECT j.cod_jogo, j.nome_jogo, p.nome_plataforma, 
        g.nome_gen, a.nome_adm from jogo j 
        inner join plataforma p on j.cod_plataforma = p.cod_plataforma 
        inner join genero g on j.cod_gen = g.cod_gen 
        inner join Administrador a on a.cod_adm = j.cod_adm
        order by j.cod_jogo ASC;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function listaTodosFormat()
    {
        $lista = [];
        $pst = Conexao::getPreparededStatement('select * from jogo');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(Jogo $jogo)
    {
        $sql = 'insert into jogo (cod_adm, cod_plataforma, cod_gen, nome_jogo) values (?,?,?,?)';
        $pst = conexao::getPreparededStatement($sql);
        $pst->bindValue(1, $jogo->getCodAdm());
        $pst->bindValue(2, $jogo->getCodPlataforma());
        $pst->bindValue(3, $jogo->getCodGen());
        $pst->bindValue(4, $jogo->getNomeJogo());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id)
    {
        $sql = "delete from jogo where cod_jogo=$id";
        $pst = conexao::getPreparededStatement($sql);

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function update(Jogo $jogo)
    {
        $sql = 'update jogo set cod_adm=?, cod_plataforma=?, cod_gen=?, nome_jogo=? where cod_jogo=?';
        $pst = conexao::getPreparededStatement($sql);
        $pst->bindValue(1, $jogo->getCodAdm());
        $pst->bindValue(2, $jogo->getCodPlataforma());
        $pst->bindValue(3, $jogo->getCodGen());
        $pst->bindValue(4, $jogo->getNomeJogo());
        $pst->bindValue(5, $jogo->getCodJogo());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

?>