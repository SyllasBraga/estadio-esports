<?php
class daoGenero
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparededStatement('select * from genero;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(Genero $genero)
    {
        $sql = 'insert into genero (nome_gen) values (?);';
        $pst = Conexao::getPreparededStatement($sql);
        $pst->bindValue(1, $genero->getNomeGen());
        if ($pst->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $sql = "delete from genero where cod_gen = $id";
        $pst = Conexao::getPreparedStatement($sql);
        if ($pst->execute()) {
            return true;
        }else{
            return false;
        }
    }
}
?>