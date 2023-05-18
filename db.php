<?php
require_once __DIR__ . "/Models/Categoria.php";
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Cibo.php";
require_once __DIR__ . "/Models/Gioco.php";

$categoria_cane = new Categoria("Cane", "fa-solid fa-dog");
$categoria_gatto = new Categoria("Gatto", "fa-solid fa-cat");
$test = new Prodotto("test", 3, $categoria_cane, "");
$natural_trainer = new Cibo("Natural Trainer", 7, $categoria_gatto, "https://m.media-amazon.com/images/I/81swFbHrE4L._AC_SY355_.jpg", "2023-08-31");
$paperella = new Gioco("Paperella PVC", 2, $categoria_cane, "https://w5.giffitsstatic.com/pics/c504/394669_1.jpg", "gomma", "papera");
$ultima = new Cibo("Ultima", 18, $categoria_cane, "https://m.media-amazon.com/images/I/711K-07keuS._AC_SX679_.jpg", "2023-10-18");
$cesar = new Cibo("Cesar", 3, $categoria_cane, "https://arcaplanet.vtexassets.com/arquivos/ids/256506-1800-1800/cesar-ricette-di-campagna-pollo-verdure.jpg?v=1770838122&quality=1&width=1800&height=1800", "2023-12-31");

$prodotti = [
    $natural_trainer,
    $paperella,
    $ultima,
    $cesar
];