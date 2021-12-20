<?php
    $current = trim(strstr($_SERVER["PHP_SELF"], ".", true), "/");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Enactus Aswan IT Team">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="../assets/images/favicon/site.webmanifest">
        
        <!-- Title generated automatically -->
        <title><?php
                // Dynamically chanege page title
                if (isset($pageName)) {
                    echo $pageName;
                } else {
                    echo "Enactus Aswan | Home";
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
        <!-- ***** Preloader Start 
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>  
         ***** Preloader End ***** -->

        <header class="">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="/assets/images/enactus-logo-white.png" class="logo">
                    </a>
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
                            <li class="nav-item <?php if($current == "projects"){ echo "active"; }?>">
                                <a class="nav-link" href="projects.php">Our Projects</a>
                            </li>
                            <li class="nav-item <?php if($current == "contact"){ echo "active"; }?>">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
