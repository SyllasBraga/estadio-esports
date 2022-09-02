<?php

class Jogo
{
    private $cod_adm;
    private $cod_plataforma;
    private $cod_gen;
    private $nome_jogo;
    private $codJogo;

    public function __construct($codJogo, $nome_jogo, $cod_plataforma, 
    $cod_gen, $cod_adm) {
        $this->codJogo = $codJogo;
        $this->cod_adm = $cod_adm;
        $this->cod_plataforma = $cod_plataforma;
        $this->cod_gen = $cod_gen;
        $this->nome_jogo = $nome_jogo;
    }
    public function getCodAdm()
    {
        return $this->cod_adm;
    }
    public function setCodAdm($cod_adm)
    {
        $this->cod_adm = $cod_adm;
    }
    public function getCodPlataforma()
    {
        return $this->cod_plataforma;
    }
    public function setCodPlataforma($cod_plataforma)
    {
        $this->cod_plataforma = $cod_plataforma;
    }
    public function getCodGen()
    {
        return $this->cod_gen;
    }
    public function setCodGen($cod_gen)
    {
        $this->cod_gen = $cod_gen;
    }
    public function getNomeJogo()
    {
        return $this->nome_jogo;
    }
    public function setNomeJogo($nome_jogo)
    {
        $this->nome_jogo = $nome_jogo;
    }
    public function getCodJogo()
    {
        return $this->codJogo;
    }
    public function setCodJogo($codJogo)
    {
        $this->codJogo = $codJogo;
    }

}

?>