<?php
$navbar_script_file = 'includes\navbar\navbar-script.js';
$navbar_style_file = 'includes\navbar\navbar-style.css';

$bb_logo_file = 'pictures\bb-logo.png';
$flag_germany_file = 'pictures\flags\flag-germany.png';

$navbar_script_path = getRelativePath($currentFile, $navbar_script_file);
$navbar_style_path = getRelativePath($currentFile, $navbar_style_file);

$bb_logo_path = getRelativePath($currentFile, $bb_logo_file);
$flag_germany_path = getRelativePath($currentFile, $flag_germany_file);


$homepage_file = "index.php";
$homepage_path = getRelativePath($currentFile, $homepage_file);

$product_file = "product.php";
$product_path = getRelativePath($currentFile, $product_file);

$order_demo_file = "order-demo.php";
$oder_demo_path = getRelativePath($currentFile, $order_demo_file);

$team_file = "team.php";
$team_path = getRelativePath($currentFile, $team_file);

$software_file = "software.php";
$software_path = getRelativePath($currentFile, $software_file);

$hardware_file= "hardware.php";
$hardware_path = getRelativePath($currentFile, $hardware_file);

$management_file = "management.php";
$management_path = getRelativePath($currentFile, $management_file);

session_start();
?>
<style>
  @import url("<?php echo $navbar_style_path ?>");
</style>
<script type="text/javascript" src="<?php echo $navbar_script_path ?>" defer></script>
<div id="navbar">

  <nav id="nav-up">
    <div id="brand-container">
      <img id="company-logo" src="<?php echo $bb_logo_path ?>">
      <span id="company-name">BrightByte Technologies</span>
    </div>

    <div id="language-flag-container">
      <img id="flag" src="<?php echo $flag_germany_path ?>">
    </div>
    <!--Mobile Only-->
    <div id="sidenav-container">
      <div id="sidenav">
        <a id="closebtn" onclick="closeNav()">&times;</a>
        <li><a href="<?php echo $homepage_path ?>">Home</a></li>
        <li id="dropdown">
          <a href="<?php echo $product_path ?>" id="dropbtn">Produkt</a>
          <div id="dropdown-content">
            <a href="<?php echo $oder_demo_path ?>">Bestellung-Demo</a>
          </div>
        </li>
        <li id="dropdown">
          <a href="<?php echo $team_path ?>" id="dropbtn">Teams</a>
          <div id="dropdown-content">
            <a href="<?php echo $management_path ?>">Management</a>
            <a href="<?php echo $software_path ?>">Software</a>
            <a href="<?php echo $hardware_path ?>">Hardware</a>
          </div>
        </li>
      </div>
      <span id="openbtn" onclick="openNav()">=</span>
    </div>
  </nav>
  <!--Big Screen-->
  <nav id="nav-down">
    <li><a href="<?php echo $homepage_path ?>">Home</a></li>
    <li id="dropdown">
      <a href="<?php echo $product_path ?>" id="dropbtn">Produkt</a>
      <div id="dropdown-content">
        <a href="<?php echo $oder_demo_path ?>">Bestellung-Demo</a>
      </div>
    </li>
    <li id="dropdown">
      <a href="<?php echo $team_path ?>" id="dropbtn">Teams</a>
      <div id="dropdown-content">
        <a href="<?php echo $management_path ?>">Management</a>
        <a href="<?php echo $software_path ?>">Software</a>
        <a href="<?php echo $hardware_path ?>">Hardware</a>
      </div>
    </li>
  </nav>
</div>
