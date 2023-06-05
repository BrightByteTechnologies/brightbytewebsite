<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'index.php';
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <title>BrightByte Technologies - Roboter für die Zukunft</title>
    <meta name="description"
        content="Willkommen bei BrightByte Technologies - Wir bauen fortschrittliche Roboter für die Zukunft">
    <meta name="keywords" content="Roboter, Technologie, Zukunft, Automatisierung">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="shortcut Icon" href="https://cdn.row-hosting.de/BBT/Website/bb-logo.png">
    <!-- Custom CSS -->
    <style>
        @import url("css/root.css");
        @import url("css/style.css");
    </style>
</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Roboter für die Zukunft</h1>
                    <p>Willkommen bei <b>BrightByte Technologies</b>, Ihrem Partner für fortschrittliche
                        Roboter-Technologien.
                        Wir sind ein innovatives Unternehmen, das sich auf die Entwicklung von Robotern spezialisiert
                        hat, die in der Lage sind, Getränke zu servieren.</p>
                </div>
            </div>

            <div class="slideshow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="slideshow-container">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                            class="active">
                                        </li>
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://cdn.row-hosting.de/BBT/Teams/group.jpg"
                                                class="d-block w-100 h-100 rounded" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://cdn.row-hosting.de/BBT/placeholder.png"
                                                class="d-block w-100 h-100 rounded" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://cdn.row-hosting.de/BBT/placeholder.png"
                                                class="d-block w-100 h-100 rounded" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>

                            <p class="text-center" id="bot-text">Unsere Roboter sind so konzipiert, dass sie die Arbeit
                                in Bars, Restaurants, Hotels und
                                anderen Einrichtungen unterstützen können, indem sie die Gäste bedienen und so das
                                Personal
                                entlasten. Wir arbeiten kontinuierlich an der Verbesserung unserer Produkte, um
                                sicherzustellen, dass sie den höchsten Qualitäts- und Sicherheitsstandards entsprechen.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <br>
        <br>
        <div class="container" id="about_us">
            <div class="row">
                <h1 class="text-center">Über Uns</h1>
                <div class="col-sm">
                    <img src="https://cdn.row-hosting.de/BBT/Website/bb-logo-removebg.png"
                        class="d-block mx-auto text-center img-thumbnail" alt="BevBot LOGO">
                </div>

                <div class="col-sm">
                    <div class="d-inline">
                        <h2 class="text-center">BrightByte Technologies</h2>
                        <p class="text-center">(Gegründet 2023)</p>
                    </div>
                    <div class="d-block w-100 h-100 text-center">
                        <p>Wir sind eine Gruppe von Schülerinnen und Schülern der BBS,
                            die sich mit einem gemeinsamen Ziel zusammengefunden haben - innovative Technologielösungen
                            zu entwickeln,
                            die die Zukunft gestalten werden.</p>
                        <p>Unser Team besteht aus drei Gruppen - Software, Hardware und Management - und wir sind
                            bestrebt,
                            innovative Lösungen zu schaffen, die einen positiven Einfluss auf die Welt haben.</p>
                        <p>Wir glauben, dass Technologie die Macht hat,
                            die Zukunft zu gestalten, und wir setzen uns ständig dafür ein,
                            Produkte zu schaffen, die an der Spitze der Branche stehen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>