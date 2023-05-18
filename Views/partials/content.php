<main class="m-5">
    <h1 class="text-center">Prodotti per animali</h1>

    <div class="container">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo $prodotto->immagine ?>" class="card-img-top" alt="..." style="height: 400px;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $prodotto->nome; ?></h5>
                            <i class="<?php echo $prodotto->categoria->icona ?>"></i>
                            <p>Categoria: <?php echo $prodotto->categoria->nome ?></p>
                            <p>&euro;<?php echo $prodotto->prezzo ?></p>
                            <p><?php echo $prodotto->getDettagli(); ?></p>
                            <?php if(get_class($prodotto) === "Cibo") { ?>
                                <p><?php echo $prodotto->getScadenza(); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
</main>