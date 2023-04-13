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
</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="order-nav">
        <div class="info">
            <p>Info</p> 
        </div>
        <div class="order-basket">
            <button>Basket</button>
        </div>
    </div>
    <div class="menu-items">
        <?php foreach ($itemInfo as $item) : ?>
            <?php
            $name = $item['itemName'];
            $price = $item['itemPrice'];
            ?>
            <div class="item">
                <div class="content-top">
                    <img src="pictures/placeholder.png" class="item-image">
                </div>
                <div class="content-bottom">
                    <p class="item-name"><?= "$name <br> $price €" ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>