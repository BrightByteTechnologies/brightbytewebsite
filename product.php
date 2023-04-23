<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'product.php';
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
	<link rel="shortcut Icon" href="https://cdn.row-hosting.de/BBT/Website/bb-logo.png">
</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="bb-sell">
        <div class="bevbotleft">
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <div class='mySlides fade'>
                    <img src='./pictures/bot01.jpg' alt='BevBot' id='bbpic'>
                </div>
                <div class='mySlides fade'>
                    <img src='./pictures/bot02.jpg' alt='BevBot' id='bbpic'>
                </div>
                <div class='mySlides fade'>
                    <img src='./pictures/bot03.jpg' alt='BevBot' id='bbpic'>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

        </div>
        <div class="bevbotright">
            <h1 id="name">BevBot</h1>
            <p id="p1">499.99 &#8364;</p>
            <form action="#">
                <button type="button" id="buy">Jetzt Einkaufen</button>
            </form>
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
            <div class='timeline sliding'>
                <img class='tl-bg' src='./pictures/timeline/timeline-1.jpg' alt='Background'>
                <div class='tl-content'>
                    <div class='tl-img-panel'>
                        <img class='tl-img' src='./pictures/start-logo-bbs.png' alt='Icon'>
                    </div>
                    <div class='tl-title'>
                        <h2>Anfang</h2>
                    </div>
                    <div class='tl-text'>
                        <p class='tl-p'>abcdefghijklmopqrstuvwxyzabcdefghijklmopqrstuvwxyzabcdefghijklmopqrstuvwxyzabcdefghijklmopqrstuvwxyz</p>
                    </div>
                </div>
            </div>
            <div class='timeline sliding'>
                <img class='tl-bg' src='./pictures/timeline/timeline-2.jpg' alt='Background'>
                <div class='tl-content'>
                    <div class='tl-img-panel'>
                        <img class='tl-img' src='./pictures/start-logo-bbs.png' alt='Icon'>
                    </div>
                    <div class='tl-title'>
                        <h2>20.04.2023</h2>
                    </div>
                    <div class='tl-text'>
                        <p class='tl-p'>abcdefghijklmopqrstuvwxyzabcdefghijklmopqrstuvwxyz</p>
                    </div>
                </div>
            </div>
            <div class='timeline sliding'>
                <img class='tl-bg' src='./pictures/start-logo-bbs.png' alt='Background'>
                <div class='tl-content'>
                    <div class='tl-img-panel'>
                        <img class='tl-img' src='./pictures/bb-logo-removebg.png' alt='Icon'>
                    </div>
                    <div class='tl-title'>
                        <h2>3</h2>
                    </div>
                    <div class='tl-text'>
                        <p class='tl-p'>TextText</p>
                    </div>
                </div>
            </div>
            <div class='timeline sliding'>
                <img class='tl-bg' src='./pictures/bb-logo-removebg.png' alt='Background'>
                <div class='tl-content'>
                    <div class='tl-img-panel'>
                        <img class='tl-img' src='./pictures/start-logo-bbs.png' alt='Icon'>
                    </div>
                    <div class='tl-title'>
                        <h2>4</h2>
                    </div>
                    <div class='tl-text'>
                        <p class='tl-p'>TextText</p>
                    </div>
                </div>
            </div>
            <div class='timeline sliding'>
                <img class='tl-bg' src='./pictures/bb-logo-removebg.png' alt='Background'>
                <div class='tl-content'>
                    <div class='tl-img-panel'>
                        <img class='tl-img' src='./pictures/start-logo-bbs.png' alt='Icon'>
                    </div>
                    <div class='tl-title'>
                        <h2>5</h2>
                    </div>
                    <div class='tl-text'>
                        <p class='tl-p'>TextText</p>
                    </div>
                </div>
            </div>
            <div class='timeline sliding'>
                <img class='tl-bg' src='./pictures/bb-logo-removebg.png' alt='Background'>
                <div class='tl-content'>
                    <div class='tl-img-panel'>
                        <img class='tl-img' src='./pictures/start-logo-bbs.png' alt='Icon'>
                    </div>
                    <div class='tl-title'>
                        <h2>6</h2>
                    </div>
                    <div class='tl-text'>
                        <p class='tl-p'>TextText</p>
                    </div>
                </div>
            </div>
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