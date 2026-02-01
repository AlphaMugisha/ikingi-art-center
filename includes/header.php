<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikingi Arts Space</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="preloader-container" id="preloader">
    <div class="preloader-content">
        <img src="images/logo.png" alt="Ikingi Arts Space Loading" class="preloader-logo">
    </div>
</div>
<nav class="navbar">
    <a href="index.php" class="logo-link">
        <img src="images/logo.png" alt="Ikingi Arts Space Logo" class="navbar-logo">
    </a>
    
    <div class="hamburger" onclick="toggleMenu()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <div class="nav-links" id="navLinks">
        <a href="index.php">Home</a>
        <a href="programs.php">Programs</a>
        <a href="artwork.php">Artwork</a>
        <a href="visit.php">Visit Us</a>
        <a href="visit.php" class="btn-join">JOIN NOW</a>
    </div>
</nav>