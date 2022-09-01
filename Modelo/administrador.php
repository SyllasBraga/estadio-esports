<?php
class administrador
{
    private $nome;
    private $salario;
    private $idade;
    public function __construct($nome, $salario, $idade)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->idade = $idade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
}
