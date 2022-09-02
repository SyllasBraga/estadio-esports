<?php
    class genero{
        private $nomeGen;
        private $codGen;
        public function __construct($codGen, $nomeGen) {
            $this->nomeGen= $nomeGen;
            $this->codGen = $codGen;
        } 
        public function getCodGen()
        {
            return $this->codGen;
        }
        public function setCodGen($codGen)
        {
            $this->codGen = $codGen;
        }
        public function getNomeGen()
        {
            return $this->nomeGen;
        }
        public function setNomeGen($nomeGen)
        {
            $this->nomeGen = $nomeGen;
        }
    }
?>