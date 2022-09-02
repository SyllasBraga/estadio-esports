<?php

    class Evento
    {
        private $nome;
        private $exclusivo;
        private $premiacao;
        private $dataInicio;
        private $dataTermino;
        private $jogo;
        private $criador;
        private $codEvt;

        public function __construct($codEvt, $nome, $exclusivo, $premiacao, 
        $dataInicio, $dataTermino, $jogo, $criador) 
        {
            $this->codEvt = $codEvt;
            $this->nome = $nome;
            $this->exclusivo = $exclusivo;
            $this->premiacao = $premiacao;
            $this->dataInicio = $dataInicio;
            $this->dataTermino = $dataTermino;
            $this->jogo = $jogo;
            $this->criador = $criador;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function getExclusivo()
        {
            return $this->exclusivo;
        }
        public function setExclusivo($exclusivo)
        {
            $this->exclusivo = $exclusivo;
        }
        public function getPremiacao()
        {
            return $this->premiacao;
        }
        public function setPremiacao($premiacao)
        {
            $this->premiacao = $premiacao;
        }
        public function getDataInicio()
        {
            return $this->dataInicio;
        }
        public function seteDataInicio($dataInicio)
        {
            $this->dataInicio = $dataInicio;
        }
        public function getDataTermino()
        {
            return $this->dataTermino;
        }
        public function setDataTermino($dataTermino)
        {
            $this->dataTermino = $dataTermino;
        }
        public function getJogo()
        {
            return $this->jogo;
        }
        public function setJogo($jogo)
        {
            $this->jogo = $jogo;
        }
        public function getCriador()
        {
            return $this->criador;
        }
        public function setCriador($criador)
        {
            $this->criador = $criador;
        }
        public function getCodEvt()
        {
            return $this->codEvt;
        }
        public function setCodEvt($codEvt)
        {
            $this->codEvt = $codEvt;
        }
    }
    

?>