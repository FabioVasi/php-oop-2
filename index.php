<?php
/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.
*/
define('ROOT', __DIR__);
define('DEBUG', false);
$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}

require __DIR__ . '/Partials/Header.php';
require __DIR__ . '/Partials/Footer.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/alimentation.php';
require __DIR__ . '/Models/toys.php';
require __DIR__ . '/Models/kennel.php';
require __DIR__ . '/db.php';


?>

<main>
    <div class="container text-center">
        <h1 class="text-white fw-bolder">Pet's Shop</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-6 g-3">
                    <div class="card bg-dark text-white text-start p-3 text-start">
                        <div>
                            <div class="d-flex justify-content-start align-items-center"><?php echo $product->getPetImage(); ?></div>
                            <h2>Pet Type: <?php echo $product->pet; ?></h2>
                            <p><?php echo $product->product; ?></p>
                        </div>
                        <div>
                            <h3>Price: <?php echo $product->price; ?> €</h3>
                            <p><?php echo is_a($product, 'Alimentation') ? $product->kilograms : ''; ?></p>
                        </div>
                        <div>
                            <h3>Product: <?php echo $product->product; ?></h3>
                            <p><?php echo is_a($product, 'Toys') ? $product->getDetails() : ''; ?></p>
                        </div>    
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>