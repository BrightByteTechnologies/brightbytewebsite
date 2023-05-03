<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'management.php';

require_once("includes/functions/api/apiRequest.php");
require_once("includes/functions/api/createProfilesList.php");
$endpoint = 'api.brightbytetechnologies.de/management';
$method = 'GET';
$keyIndex = 0;

$responseData = makeRequest($endpoint, $method, $keyIndex);

$profilesList = createList($responseData);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BrightByte Technologies - Verwaltung-Team</title>
    <link rel="shortcut Icon" href="https://cdn.row-hosting.de/BBT/Website/bb-logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        @import url("css/root.css");
        @import url("css/style.css");
        @import url("css/team.css");
    </style>


</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="main">
        <div class="d-flex justify-content-center align-items-center pictures">
            <img class="softGIF" src="https://cdn.row-hosting.de/BBT/Gifs/software.gif">
            <h1 class="text-center display-1">Lernen Sie unser Verwaltungs-Team kennen</h1>
        </div>

        <div class="flow">
            <h3 class="text-center">Unser Verwaltungsteam - engagiert,
                kompetent und immer auf dem neuesten Stand.</h3>

            <div class="team">
                <?php echo $profilesList; ?>

            </div>
        </div>  
        <h2 class="text-center"><q>Vereinfachen Sie Ihre Verwaltung mit uns.</q></h2>
        <p class="text-center lead">Effiziente Verwaltung auf höchstem Niveau - <br> mit uns haben Sie den perfekten
            Partner. </p><br><br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>