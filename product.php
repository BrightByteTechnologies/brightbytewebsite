<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'product.php';

require_once("includes/functions/api/apiRequest.php");
$endpoint = 'api.brightbytetechnologies.de/timeline';
$method = 'GET';
$keyIndex = 0;

$responseData = makeRequest($endpoint, $method, $keyIndex);

// Define a custom comparison function to compare the 'date' values
function compareDates($a, $b) {
    $dateA = strtotime($a['date']);
    $dateB = strtotime($b['date']);
    return $dateA - $dateB;
}

usort($responseData, 'compareDates');

$timelineList = "";
foreach ($responseData as $timeline) {
    $id = $timeline['id'];
    $date = $timeline['date'];
    $desc = $timeline['description'];
    $url = $timeline['url'];

    $timestamp = strtotime($date);
    $formattedDate = date('d.m.Y', $timestamp);

    $timelineList .= "<div class='timeline sliding'>";
    $timelineList .= "<img class='tl-bg' src='$url' alt='Background'>";
    $timelineList .= "<div class='tl-content'>";
    $timelineList .= "<div class='tl-img-panel'>";
    $timelineList .= "<img class='tl-img' src='https://cdn.row-hosting.de/BBT/Website/bb-logo.png' alt='Icon'>";
    $timelineList .= "</div>";
    $timelineList .= "<div class='tl-title'>";
    $timelineList .= "<h2>$formattedDate</h2>";
    $timelineList .= "</div>";
    $timelineList .= "<div class='tl-text'>";
    $timelineList .= "<p class='tl-p'>$desc</p>";
    $timelineList .= "</div></div></div>";
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
    <?php include 'includes/functions/misc/fonts.html'; ?>
	<link rel="shortcut Icon" href="https://cdn.row-hosting.de/BBT/Website/bb-logo.png">
</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="bb-sell">
        <div class="bevbotleft">
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <div class='mySlides fade'>
                    <img src='https://cdn.row-hosting.de/BBT/Website/bevbot_front.jpg' alt='BevBot' id='bbpic'>
                </div>
                <div class='mySlides fade'>
                    <img src='https://cdn.row-hosting.de/BBT/Website/bevbot_back.jpg' alt='BevBot' id='bbpic'>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

        </div>
        <div class="bevbotright">
            <h1 id="name">BevBot</h1>
            <p id="mini">(Nicht zum Verkauf)</p>
            <p id="p1">499.99 &#8364;</p>
            <p id="mini">(Beispiel Preis)</p>
        </div>
    </div>
    <div class="bb-why">
        <div class='bb-des'>
            <h1 class='lb'>Was ist BevBot?</h1>
            <p class='lb' id='bevDesc'></p>
        </div>
        <div class='bb-des'>
            <h1 class='lb'>Warum brauchen Sie BevBot?</h1>
            <p class='lb' id='bevWhy'></p>
        </div>
        <div class='bb-des'>
            <h1 class="lb">Was sind die Vorteile?</h1>
            <div class="lb" id="benefit">
            </div>
        </div>
    </div>
    </div>
    <div class="timeline-container">
        <div class="timeline-box">
            <a class="time-forward " onclick="prevSlide()">&#10094;</a>
                <?php echo $timelineList; ?>
            <a class=" time-backward" onclick="nextSlide()">&#10095;</a>
        </div>
    </div>
    </div>
    <div>
        <button onclick="topFunction()" id="topBtn" title="top">⋀</button>
    </div>
    </div>

</body>

</html>