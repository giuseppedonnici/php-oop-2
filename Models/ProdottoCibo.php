<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Categoria.php";

class ProdottoCibo extends Prodotto {
    public $tipoCibo;

    public function __construct($_nome = "", $_descrizione = "")
    {
        parent::__construct($_nome, $_prezzo, Categoria $_categoria, $_descrizione = "");
        $this->tipoCibo = $tipoCibo;
    }
}