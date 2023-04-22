<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'order-demo.php';

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bevbot";
$connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error); // Terminate the script if the connection failed
}

$sql = "SELECT * FROM items";
$stmt1 = $connection->prepare($sql);
$stmt1->execute();
$result = $stmt1->get_result();

$itemInfo = array();
while ($row = $result->fetch_assoc()) {
    $itemInfo[] = array(
        "itemId" => $row["id"],
        "itemCategoryId" => $row["itemCategoryId"],
        "itemName" => $row["itemName"],
        "itemDesc" => $row["itemDesc"],
        "itemPrice" => $row["itemPrice"]
    );
}
$result->free_result();
?>

<!Doctype HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url("css/root.css");
        @import url("css/oder-demo-style.css");
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
        <?php
        $counter = 1;
        foreach ($itemInfo as $item) :
            $name = $item['itemName'];
            $price = $item['itemPrice'];
            $itemId = "$counter";
        ?>
            <div class="item" id="<?= $itemId ?>" onclick="order(event)">
                <div class="content-top">
                    <img src="pictures/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-info"><?= "<span class='item-name'>$name</span> <br> <b class='item-price'>$price</b> €" ?></p>
                </div>
            </div>
        <?php
            $counter++;
        endforeach;
        ?>
    </div>
</body>

</html>