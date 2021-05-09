<?php
    $current = trim(strstr($_SERVER["PHP_SELF"], ".", true), "/");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Enacts Aswan IT Team">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <title><?php
                // Dynamically chanege page title
                if (isset($pageName)) {
                    echo $pageName;
                } else {
                    echo "Enacts Aswan | Home";
                }
                ?>
        </title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/owl.css">
    </head>
    <body>
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>  
        <!-- ***** Preloader End ***** -->

        <header class="">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><h2>Enacts</h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item <?php if($current == "index"){ echo "active"; }?>">
                                <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item <?php if($current == "about"){ echo "active"; }?>">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item <?php if($current == "services"){ echo "active"; }?>">
                                <a class="nav-link" href="services.php">Our Services</a>
                            </li>
                            <li class="nav-item <?php if($current == "contact"){ echo "active"; }?>">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
