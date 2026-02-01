<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikingi Arts Space</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">IKINGI ARTS SPACE</div>
        <div class="links">
            <a href="#">Home</a>
            <a href="#">Artwork</a>
            <a href="#">About</a>
            <a href="#">Programs</a>
            <a href="#">Contact</a>
            <button class="join-btn">JOIN NOW</button>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>IKINGI <span class="green">ARTS</span> <span class="red">SPACE</span></h1>
            <img src="images/logo_main.png" alt="Logo" class="hero-logo">
        </div>
        <div class="wave">
            <svg viewBox="0 0 1440 320"><path fill="#ffffff" d="M0,224L120,213.3C240,203,480,181,720,186.7C960,192,1200,224,1320,240L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        </div>
    </section>

    <section class="info-container">
        <div class="row">
            <div class="image-box"><img src="images/fire.jpg"></div>
            <div class="text-box">
                <h2>Welcome to ikingi arts space</h2>
                <p>Ikingi Arts Space is a creative hub where art, culture, and community come together...</p>
            </div>
        </div>

        <div class="row reverse">
            <div class="text-box">
                <h2>Discover Rwandans History through art</h2>
                <p>Ikingi Arts is a creative space where Rwandan history, culture, and contemporary art come together...</p>
            </div>
            <div class="image-box"><img src="images/gallery.jpg"></div>
        </div>
    </section>

    <section class="gallery-section">
        <h2>OUR ART PIECES</h2>
        <div class="slider-wrapper">
            <button class="prev" onclick="slide(-1)">&#10094;</button>
            <div class="viewport">
                <div class="track" id="track">
                    <div class="card">
                        <img src="images/art1.jpg">
                        <span class="price">100</span>
                    </div>
                    <div class="card">
                        <img src="images/art2.jpg">
                        <span class="price">250</span>
                    </div>
                    <div class="card">
                        <img src="images/art3.jpg">
                        <span class="price">180</span>
                    </div>
                </div>
            </div>
            <button class="next" onclick="slide(1)">&#10095;</button>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>