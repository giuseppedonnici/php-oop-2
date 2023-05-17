<?php
require_once __DIR__ . "/Categoria.php";
require_once __DIR__ . "/ProdottoCibo.php";

 class Prodotto {
    public $nome;
    public $descrizione;
    public $prezzo;
    public $categoria;

    /**
     * @param String $_nome
     * @param Float $_prezzo
     * @param Categoria $_categoria
     * @param String $_descrizione
     */
    function __construct($_nome, $_prezzo, Categoria $_categoria, $_descrizione = "")
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->descrizione = $_descrizione;
    }
 }