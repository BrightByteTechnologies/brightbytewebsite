<?php
require_once("includes/functions/misc/getRelativPath.php");
$currentFile = 'team.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <style>
        @import url("css/root.css"); 
        @import url("css/style.css");
        @import url("css/team-style.css");
       
    </style>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" defer>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer>
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>BrightByte Technologies - Team</title>
</head>

<body>
    <?php include('includes/navbar/navbar.php') ?>
    <div class="main">
    <div class="container">

	<div class="row">
	

<div class="content">
<img src="https://cdn.row-hosting.de/BBT/Teams/group.jpg" alt="group" >
<h4>BrightByte Technologies Mitarbeiter</h4>
<p></p>
</div>

	<div class="row">
		<div class="col-md-4 col-sm-6">
			<a href="<?php echo $management_path ?>">
			<div class="context" >
				
				<img src="https://cdn.row-hosting.de/BBT/Teams/Managment/management_group.jpg" alt="" class="img-fluid mx-auto d-block">
				<div class="overlay green">
					<div class="text text-white text-center">
						<div>
						<p><i class="fas fa-chart-line fa-2x"></i></p>
							<p><b>VERWALTUNG</b></p>
						</div>
					</div>
			</div>	
			</div>
		</a>
	</div>
		<div class="col-md-4 col-sm-6">
			<a href="<?php echo $software_path ?>">

			<div class="context darkblue">
				<img src="https://cdn.row-hosting.de/BBT/Teams/Software/software_group.jpg" alt="" class="img-fluid mx-auto d-block">
				<div class="overlay darkblue  ">
					<div class="text text-white text-center">
						<div>
						<p><i class="fas fa-laptop-code fa-2x"></i></p>
							<p><b>SOFTWARE</b></p>
						</div>
					</div>
				</div>
			</div>	
		</a>
		</div>
		
		<div class="col-md-4 col-sm-6">
			<a href="<?php echo $hardware_path ?>">
			<div class="context">
				<img src="https://cdn.row-hosting.de/BBT/Teams/Hardware/hardware_group.jpg" alt="" class="img-fluid mx-auto d-block">
				<div class="pink overlay">
					<div class="text text-white text-center">
						<div>
						<p><i class="fas fa-wrench fa-2x"></i></p>
							<p><b>HARDWARE</b></p>
						</div>
					</div>
				</div>
			</div>
		</a>	
		</div>
	</div>
	<div class="row">
	<div class="col-sm-12">
  	<h2>Ehrenvoll Anerkennung</h2>
	</div>
	<div class="image">
        <img src="https://cdn.row-hosting.de/BBT/Teams/Ole.jpg">
      </div>
	  <div class="col-sm-12">
      <div class="text2">
		<p>Ole Sakowski</p>
		<p>Business Partner</p>
		<br><br><br><br>
        <h3>Danke für Ihren Beitrag</h3>
		<p class="para">Wir erkennen und schätzen alles, was Sie für das Unternehmen leisten.</p>
      </div>
</div>
</div>
    </div>
</body>

</html>