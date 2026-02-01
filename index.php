<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikingi Arts Space</title>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo-text">IKINGI ARTS SPACE</div>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Artwork</a>
                <a href="#">About</a>
                <a href="#">Programs</a>
                <a href="#">Contacts</a>
                <a href="#" class="btn-join">JOIN NOW</a>
            </div>
        </nav>

        <div class="hero-section">
            <div class="hero-content">
                <h1 class="main-title">
                    <span class="text-yellow">IKINGI</span> 
                    <span class="text-green">ARTS</span> 
                    <span class="text-red">SPACE</span>
                </h1>
                <div class="center-logo">
                    <img src="images/logo_center.png" alt="Ikingi Logo" style="height: 100px;">
                </div>
            </div>
            
            <div class="custom-wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </header>

    <main class="container">
        
        <div class="content-block">
            <div class="image-wrapper">
                <img src="images/fire.jpg" alt="Bonfire">
            </div>
            <div class="text-wrapper">
                <h2>Welcome to ikingi arts space</h2>
                <p>Ikingi Arts Space is a creative hub where art, culture, and community come together through exhibitions, open mics, and cultural experiences.</p>
            </div>
        </div>

        <div class="content-block reverse">
            <div class="text-wrapper">
                <h2>Discover Rwandans History through art</h2>
                <p>Ikingi Arts is a creative space where Rwandan history, culture, and contemporary art come together through exhibitions, workshops, and storytelling.</p>
            </div>
            <div class="image-wrapper">
                <img src="images/gallery_room.jpg" alt="Gallery Room">
            </div>
        </div>

        <div class="mosaic-section">
            <div class="basket-wrapper">
                <img src="images/baskets.jpg" alt="Rwandan Baskets" class="main-basket-img">
                
                <div class="quote-box">
                    <p>“Art is not what you see, but what you make others feel — a quiet language that speaks when words fall short.”</p>
                    <span class="author">— Edgar Degas</span>
                </div>
            </div>
        </div>

    </main>

    <section class="gallery-dark">
        <h2 class="gallery-title">OUR ART PIECES</h2>
        
        <div class="carousel-container">
            <button class="nav-arrow" onclick="slide(-1)">&#10094;</button>
            
            <div class="gallery-viewport">
                <div class="gallery-track" id="track">
                    <?php
                    // PHP Array for Artworks
                    $artworks = [
                        ['img' => 'art1.jpg', 'price' => '100'],
                        ['img' => 'art2.jpg', 'price' => '250'],
                        ['img' => 'art1.jpg', 'price' => '180'], // Duplicates for demo
                        ['img' => 'art2.jpg', 'price' => '300'],
                    ];

                    foreach ($artworks as $art) {
                        echo "
                        <div class='art-card'>
                            <img src='images/{$art['img']}'>
                            <div class='price-tag'>£{$art['price']}</div>
                        </div>";
                    }
                    ?>
                </div>
            </div>

            <button class="nav-arrow" onclick="slide(1)">&#10095;</button>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>