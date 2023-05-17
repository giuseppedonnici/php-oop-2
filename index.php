<?php
/*
 Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
 */

require_once __DIR__ . "/Models/Prodotto.php";

$prodotto_1 = new Prodotto("pippo", 5.5, new Categoria("cane"));
$prodotto_2 = new Prodotto("pippa", 7.5, new Categoria("gatto"));


var_dump($prodotto_1, $prodotto_2);