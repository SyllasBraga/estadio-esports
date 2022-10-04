<?php  
class conexao
{
    private static $dsn = 'mysql:host=127.0.0.1;dbname=estadio_esports;port=3306;charset=UTF8';
    private static $usuario = 'root';
    private static $senha = '12345';
    private static $conexao = null;
    
    public static function getConexao()
    {
        if (Conexao::$conexao == null) {
            try { 
                Conexao::$conexao = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return Conexao::$conexao;
    }  
    public static function getPreparededStatement($sql)
    {
        $pst = null;
        if (Conexao::getConexao()!=null) {
            try {
                $pst = Conexao::$conexao->prepare($sql);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $pst;
    }
}
?>