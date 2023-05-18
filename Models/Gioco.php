<?php
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto {
    public $materiale;
    public $forma;

    function __construct(String $_nome, Float $_prezzo, Categoria $_categoria, String $_immagine, String $_materiale, String $_forma)
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_immagine);
        $this->materiale = $_materiale;
        $this->forma = $_forma;
    }

    function getDettagli()
    {
        return "{$this->materiale}, {$this->forma}";
    }
}