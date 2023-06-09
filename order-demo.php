<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'order-demo.php';
?>

<!Doctype HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BrightByte Technologies - Order-Demo </title>
    <link rel="shortcut Icon" href="https://cdn.row-hosting.de/BBT/Website/bb-logo.png">
    <?php include 'includes/functions/misc/fonts.html'; ?>
    <style>
        @import url("css/root.css");
        @import url("css/order-demo-style.css");
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dompurify@2.3.2/dist/purify.min.js"></script>
    <script src="./scripts/order-demo-script.js" defer></script>
</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="order-nav">
        <div class="info scroll-left">
            <p>Info: Es ist nur eine Demo</p>
        </div>
        <div class="order-basket">
            <button id="basketBtn">
                <span id="basketCount">0</span>
            </button>
            <div id="basket-overlay"></div>
            <div class="basket">
                <div id="basket-header">
                    <button id="basket-close">&#10006;</button>
                    <h2>Warenkorb</h2>
                </div>
                <table id="basket-items">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Beschreibung</th>
                            <th>Menge</th>
                            <th>Preis</th>
                            <th>Gesamt</th>
                            <th>Entfernen</th>
                        </tr>
                    </thead>
                    <tbody id="items-in-basket">
                    </tbody>
                </table>
                <div id="basket-footer">
                    <button class="basket-buttons" id="pay-button">Bestellen</button>
                    <button class="basket-buttons" id="reset-button">Leeren</button>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-items">
        <div class="item" id="1" onclick="order(event)">
            <div class="content-top">
                <img src="https://cdn.row-hosting.de/BBT/Products/Beverage/Cola_Original.jpg" class="item-image">
            </div>
            <div class="content-bottom">
                <p class="item-info"><span class='item-name'>Cola</span> <br> <span class='item-description'>Original Cola</span> <br><b class='item-price'>1.23</b> €</p>
            </div>
        </div>
        <div class="item" id="2" onclick="order(event)">
            <div class="content-top">
                <img src="https://cdn.row-hosting.de/BBT/Products/Beverage/Cola_Vanille.jpg" class="item-image">
            </div>
            <div class="content-bottom">
                <p class="item-info"><span class='item-name'>Cola Vanille</span> <br> <span class='item-description'>Cola mit Vanillegeschmack</span> <br><b class='item-price'>1.23</b> €
                </p>
            </div>
        </div>
        <div class="item" id="3" onclick="order(event)">
            <div class="content-top">
                <img src="https://cdn.row-hosting.de/BBT/Products/Beverage/Fanta_Original.jpg" class="item-image">
            </div>
            <div class="content-bottom">
                <p class="item-info"><span class='item-name'>Fanta</span> <br> <span class='item-description'>Original Fanta</span> <br><b class='item-price'>1.23</b> €</p>
            </div>
        </div>
        <div class="item" id="4" onclick="order(event)">
            <div class="content-top">
                <img src="https://cdn.row-hosting.de/BBT/Products/Beverage/Fanta_Mango.jpg" class="item-image">
            </div>
            <div class="content-bottom">
                <p class="item-info"><span class='item-name'>Fanta Mango</span> <br> <span class='item-description'>Fanta Mango-Style</span> <br><b class='item-price'>1.23</b> €
                </p>
            </div>
        </div>
        <div class="item" id="5" onclick="order(event)">
            <div class="content-top">
                <img src="https://cdn.row-hosting.de/BBT/Products/Beverage/Sprite_Original.jpg" class="item-image">
            </div>
            <div class="content-bottom">
                <p class="item-info"><span class='item-name'>Sprite</span> <br> <span class='item-description'>Original Sprite</span> <br><b class='item-price'>1.23</b> €</p>
            </div>
        </div>
        <div class="item" id="6" onclick="order(event)">
            <div class="content-top">
                <img src="https://cdn.row-hosting.de/BBT/Products/Beverage/Monster_Energy.jpg" class="item-image">
            </div>
            <div class="content-bottom">
                <p class="item-info"><span class='item-name'>Monster Energy</span> <br> <span class='item-description'>Original Monster Energy</span> <br><b class='item-price'>1.23</b> €
                </p>
            </div>
        </div>
    </div>
</body>

</html>