<?php

    class daoEvento
    {
        public function listaTodos()
        {
            $lista = [];
            $pst = Conexao::getPreparededStatement('select * from evento');
            $pst ->execute();
            $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            return $lista;
        }
        public function inclui(evento $evt)
        {
            $sql = 'insert into evento (nome_evt, duracaoINICIO, duracaoFIM, premiacao, exclusivo_arena, cod_adm, cod_jogo)
            values(?,?,?,?,?,?,?)';
            $pst = conexao :: getPreparededStatement($sql);
            $pst->bindValue(1, $evt->getNome());
            $pst->bindValue(2, $evt->getDataInicio());
            $pst->bindValue(3, $evt->getDataTermino());
            $pst->bindValue(4, $evt->getPremiacao());
            $pst->bindValue(5, $evt->getExclusivo());
            $pst->bindValue(6, $evt->getCriador());
            $pst->bindValue(7, $evt->getJogo());
            if ($pst->execute()) {
                return true;
            } else {
                return false;
            }
            
        }
    }


?>