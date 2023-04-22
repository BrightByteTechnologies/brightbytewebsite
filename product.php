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
            <p class='lb'>BevBot ist ein fortschrittlicher Roboter f&#252;r die automatisierte Getr&#228;nkelieferung. <br>
                Kunden k&#246;nnen ihre Bestellung &#252;ber eine Smartphone-App aufgeben und BevBot erledigt den Rest,
                um jedes Getr&#228;nk p&#252;nktlich und in einwandfreiem Zustand zu liefern.</p>
        </div>
        <div class='bb-des'>
            <h1 class='lb'>Warum brauchen Sie BevBot?</h1>
            <p class='lb'>BevBot bietet eine bequeme und zeitsparende L&#246;sung f&#252;r Menschen, die einen gesch&#228;ftigen
                Lebensstil haben oder eine einfache und stressfreie M&#246;glichkeit suchen,
                Getr&#228;nke zu bestellen und zu erhalten. In einem Restaurantbetrieb kann BevBot eingesetzt werden, um den Service zu beschleunigen,
                Wartezeiten zu verk&#252;rzen und den Arbeitsaufwand f&#252;r das Personal zu reduzieren. BevBot ist mit modernster Sicherheitstechnologie ausgestattet,
                um sowohl sich selbst als auch die Getr&#228;nke w&#228;hrend der Lieferung sicher zu halten.</p>
        </div>
        <div class='bb-des'>
            <h1 class="lb">Was sind die Vorteile?</h1>
            <div class="lb" id="benefit">
                <span class="des-name lb"> 1: Effizienz<br></span>
                <span class="des-detail">Ein Servierroboter kann die Effizienz und Geschwindigkeit des Serviceprozesses verbessern,
                    indem er Bestellungen schnell und genau entgegennimmt und die Getr&auml;nke ohne Verz&ouml;gerungen oder Fehler liefert.</span>
                <span class="des-name"> 2: Reduzierung von Wartezeiten<br><br></span>
                <span class="des-detail">Kunden m&uuml;ssen nicht mehr lange auf ihre Bestellungen warten,
                    da der Roboter in der Lage ist, mehrere Bestellungen gleichzeitig zu bearbeiten und zu liefern.</span>
                <span class="des-name">3: Konsistenz<br></span>
                <span class="des-detail">Ein Servierroboter liefert Getr&auml;nke auf eine konsistente Art und Weise,
                    wodurch eine hohe Qualit&auml;t des Service gew&auml;hrleistet wird.</span>
                <span class="des-name"> 4: Kosteneffizienz<br></span>
                <span class="des-detail">Da der Roboter die Arbeit von menschlichen Servicekr&auml;ften &uuml;bernimmt,
                    k&ouml;nnen die Kosten f&uuml;r die Einstellung von Personal reduziert werden.</span>
                <span class="des-name"> 6: Kontaktlosigkeit<br></span>
                <span class="des-detail">In der heutigen Zeit, in der die Gesundheit und Sicherheit der Kunden von gro&szlig;er Bedeutung ist,
                    kann ein Servierroboter eine kontaktlose Option bieten, bei der Kunden ihre Bestellungen &uuml;ber eine Smartphone-App aufgeben k&ouml;nnen
                    und keine Interaktion mit dem Personal erforderlich ist.</span>
                <span class="des-name"> 7: Attraktivit&auml;t<br></span>
                <span class="des-detail">Ein Servierroboter kann ein attraktives und innovatives Element in einem Restaurant oder einem anderen Gesch&auml;ft
                    sein und kann dazu beitragen, Kunden anzuziehen und sie zu beeindrucken.</span>
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