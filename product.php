<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'product.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bevbot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("css/root.css");
        @import url("css/product-style.css");
    </style>
    <script type="text/javascript" src="./scripts/product-script.js" defer></script>
    <title>BrightByte Technologies - Produkt</title>
</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="bb-sell">
        <div class="bevbotleft">
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <?php
                $rqs = "SELECT * FROM img WHERE imgId='1'";
                $result = $conn->query($rqs);

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $ssPic = $row['picture'];
                    echo "<div class='mySlides fade'>";
                    echo "<img src='" . $ssPic . "' alt='BevBot' id='bbpic'>";
                    echo "</div>";
                };
                ?>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

        </div>
        <div class="bevbotright">
            <h1 id="name">BevBot</h1>
            <p id="p1">4999.99 &#8364;</p>
            <form action="#">
                <button type="button" id="buy">Jetzt Einkaufen</button>
            </form>
        </div>
    </div>
    <div class="bb-why">
        <?php
        $rqs = "SELECT * FROM description";
        $result = $conn->query($rqs);

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<div class='bb-des'>";
            $desTitle = $row['desTitle'];
            $desContent = $row['desContent'];
            echo "<h1 class='lb'>" . $desTitle . "</h1>";
            echo "<p class='lb'>" . $desContent . "</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="timeline-container">
        <div class="timeline-box">
            <a class="time-forward " onclick="prevSlide()">&#10094;</a>
            <?php
            $rqs = "SELECT DISTINCT t.tlTitle, t.tlContent, t.tlPic, t.tlBG, i.imgId, i.picture FROM timeline AS t, img AS i WHERE t.tlPic = i.imgId";
            $result = $conn->query($rqs);

            $selectContent = array();

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $selectContent[] = array(
                    'title' => $row['tlTitle'],
                    'desc' => $row['tlContent'],
                    'bgid' => $row['tlBG'],
                    'iconid' => $row['tlPic'],
                    'picid' => $row['imgId'],
                );
            };

            $rqs = "SELECT t.tlPic, t.tlBG, i.imgId, i.picture FROM timeline AS t, img AS i WHERE t.tlPic = i.imgId";
            $result = $conn->query($rqs);

            $selectPic = array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $selectPic[] = array(
                    'picname' => $row['picture']
                );
            }

            $rqs = "SELECT t.tlPic, t.tlBG, i.imgId, i.picture FROM timeline AS t, img AS i WHERE t.tlBG = i.imgId";
            $result = $conn->query($rqs);
            $selectBG = array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $selectBG[] = array(
                    'bgname' => $row['picture']
                );
            }

            foreach ($selectContent as $i => $data) {
                echo "<div class='timeline sliding'>";
                echo "<img class='tl-bg' src='" . $selectBG[$i]['bgname'] . "' alt='Background'>";
                echo "<div class='tl-content'>";
                echo "<div class='tl-img-panel'>";
                echo "<img class='tl-img' src='" . $selectPic[$i]['picname'] . "' alt='Icon'>";
                echo "</div>";
                echo "<div class='tl-title'>";
                echo "<h2>" . $data['title'] . "</h2>";
                echo "</div>";
                echo "<div class='tl-text'>";
                echo "<p class='tl-p'>" . $data['desc'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
            <a class="time-backward" onclick="nextSlide()">&#10095;</a>
        </div>
    </div>
    </div>
    <div>
        <button onclick="topFunction()" id="topBtn" title="top">⋀</button>
    </div>
    </div>

</body>

</html>