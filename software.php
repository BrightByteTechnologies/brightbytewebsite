<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'software.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Software</title>
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
    <section class="d-flex justify-content-center align-items-center softGIF">
      <img class="d-block" src="pictures/teampics/software.gif">
    </section>

    <h1 class="text-center display-1">Lernen Sie unser Software-Team kennen</h1>
    <br><br>






    <div class="flow">
      <h3 class="text-center">Lassen Sie sich von unserem Team von Softwareentwicklern inspirieren. Wir verwandeln Ihre Ideen in Realität.</h3>

      <div class="team">
        <ul class="auto-grid" role="list">
          <li>
            <a class="profile">
              <h4 class="profile__name">Domenic Kirchner</h4>
              <p class="para">Teamleader</p>
              <img alt="domenic" src="./pictures/teampics/Domenic.png" />
            </a>
          </li>
          <li>
            <a class="profile">
              <h4 class="profile__name">Jonas A. Hagemann</h4>
              <p class="para">Softwareentwickler</p>
              <img alt="jonas" src="./pictures/teampics/Jonas.jpg" />
            </a>
          </li>
          <li>
            <a class="profile">
              <h4 class="profile__name">Singh Karamjit Kaur</h4>
              <p class="para">Softwareentwicklerin</p>
              <img alt="karamjit" src="./pictures/teampics/Karamjit.jpg" />
            </a>
          </li>
          <li>
            <a class="profile">
              <h4 class="profile__name">Chengxin Yang</h4>
              <p class="para">Softwareentwickler</p>
              <img alt="chengxin" src="./pictures/teampics/Chengxin.png" />
            </a>
          </li>
        </ul>
      </div>
    </div>
    <h2 class="text-center"><q>Ein Team, ein Ziel: herausragende Software.</q></h2>
    <p class="text-center lead">Uns treibt die Idee an, dass die beste Arbeit aus Fleiß, <br> Handwerkskunst und Spaß entsteht. </p><br><br>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>