<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    private $scadenza;

    function __construct(String $_nome, Float $_prezzo, Categoria $_categoria, String $_immagine, String $_scadenza = "")
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_immagine);
        $this->scadenza = $_scadenza;
    }

    public function getScadenza() {
        return $this->scadenza;
    }

}