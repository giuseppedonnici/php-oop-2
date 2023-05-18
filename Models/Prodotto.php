<?php
require_once __DIR__ . "/Categoria.php";
/**
 * ## classe Prodotto
 * definisce la classe prodotto
 * @author Giuseppe Donnici
 */
 class Prodotto {
    public $nome;
    public $prezzo;
    public $categoria;
    public $immagine;

    /**
     * @param String $_nome
     * @param Float $_prezzo
     * @param Categoria $_categoria
     * @param String $_immagine
     */
    function __construct(String $_nome, Float $_prezzo, Categoria $_categoria, String $_immagine)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->immagine = $_immagine;
    }

    function getDettagli() {
        return "";
    }
 }