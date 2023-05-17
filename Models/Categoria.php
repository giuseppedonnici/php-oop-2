<?php
class Categoria {
    public $nome;

    /**
     * @param String $_nome
     */
    function __construct($_nome) 
    {
        $this->nome = $_nome;
    }
}