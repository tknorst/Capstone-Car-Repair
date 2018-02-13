
<!--This connects to facebook Api-->
<?php
require_once 'facebook_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Capstone</title>
	<meta charset="utf-8" />
<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<meta name="viewport" content = "width=device-width, initial-scale=1.0">
	
<!--Fits to entire page-->
	<style type="text/css">
		html,
		body {
		  height:100%
		}
	</style>
</head>

<body class="body" style="background-color:#f6f6f6">
<!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- Company title -->
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
<!-- Links on Navbar  -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=######">Features</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=######">Report</a>
                </li>
<!--  Dropdown Link on Navbar  -->		
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?page=######">View</a>
                        <a class="dropdown-item" href="index.php?page=######">Edit</a>
                    </div>
                </li>
<!--  Login/Out button Sends to Facebook authentication -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php echo $output; ?>			
                </li>
               
            </ul>
        </div>
    </nav>



	