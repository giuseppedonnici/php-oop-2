<?php
/**
 * ## classe Categoria
 * defininisce la classe categoria
 * @author Giuseppe Donnici
 */
class Categoria {
    public $nome;
    public $icona;

    /**
     * @param String $_nome
     */
    function __construct($_nome, $_icona) 
    {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }
}