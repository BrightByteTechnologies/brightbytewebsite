<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'order-demo.php';
?>

<!Doctype HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut Icon" href="https://cdn.row-hosting.de/BBT/Website/bb-logo.png">

    <style>
        @import url("css/root.css");
        @import url("css/order-demo-style.css");
    </style>
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
                Basket
                <span id="basketCount">0</span>
            </button>
            <div id="basket-overlay"></div>
            <div id="basket">
                <div id="basket-header">
                    <button id="basket-close">&#10006;</button>
                    <h2>Basket</h2>
                </div>
                <table id="basket-items">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Mange</th>
                            <th>Entfernen</th>
                        </tr>
                    </thead>
                    <tbody id="items-in-basket">
                    </tbody>
                </table>
                <div id="basket-footer">
                    <button id="pay-button">Order</button>
                    <button id="reset-button">Entfernen</button>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-items">
            <div class="item" id="1" onclick="order(event)">
                <div class="content-top">
                    <img src="https://cdn.row-hosting.de/BBT/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-info"><span class='item-name'>Cola</span> <br> <b class='item-price'>1.23</b> €</p>
                </div>
        </div>
                    <div class="item" id="2" onclick="order(event)">
                <div class="content-top">
                    <img src="https://cdn.row-hosting.de/BBT/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-info"><span class='item-name'>Cola Vanille</span> <br> <b class='item-price'>1.23</b> €</p>
                </div>
        </div>
                    <div class="item" id="3" onclick="order(event)">
                <div class="content-top">
                    <img src="https://cdn.row-hosting.de/BBT/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-info"><span class='item-name'>Fanta</span> <br> <b class='item-price'>1.23</b> €</p>
                </div>
        </div>
                    <div class="item" id="4" onclick="order(event)">
                <div class="content-top">
                    <img src="https://cdn.row-hosting.de/BBT/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-info"><span class='item-name'>Fanta Mango</span> <br> <b class='item-price'>1.23</b> €</p>
                </div>
        </div>
                    <div class="item" id="5" onclick="order(event)">
                <div class="content-top">
                    <img src="https://cdn.row-hosting.de/BBT/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-info"><span class='item-name'>Sprite</span> <br> <b class='item-price'>1.23</b> €</p>
                </div>
        </div>
                    <div class="item" id="6" onclick="order(event)">
                <div class="content-top">
                    <img src="https://cdn.row-hosting.de/BBT/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-info"><span class='item-name'>Energy Drink</span> <br> <b class='item-price'>1.23</b> €</p>
                </div>
        </div>
    </div>
</body>

</html>
