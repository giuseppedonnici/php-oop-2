<?php
class Categoria {
    public $nome;
    public $razza;

    /**
     * @param String $_nome
     */
    function __construct($_nome, $_razza = "") 
    {
        $this->nome = $_nome;
        $this->razza = $_razza;
    }
}