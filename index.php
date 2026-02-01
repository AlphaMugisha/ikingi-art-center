<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikingi Arts Space</title>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo-text">IKINGI ARTS SPACE</div>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#events">Programs</a>
                <a href="#gallery">Artwork</a>
                <a href="#visit">Visit Us</a>
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
                    <img src="https://cdn-icons-png.flaticon.com/512/1048/1048927.png" alt="Logo" style="height: 100px; opacity: 0.9;">
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
                <img src="https://images.unsplash.com/photo-1533575770077-052fa2c609fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bonfire">
            </div>
            <div class="text-wrapper">
                <h2>Welcome to ikingi arts space</h2>
                <p>Ikingi Arts Space is a creative hub where art, culture, and community come together through exhibitions, open mics, and cultural experiences.</p>
            </div>
        </div>

        <div class="content-block reverse">
            <div class="text-wrapper">
                <h2>Discover Rwandan History</h2>
                <p>We are a space where history, culture, and contemporary art come together through exhibitions, workshops, and storytelling.</p>
            </div>
            <div class="image-wrapper">
                <img src="https://images.unsplash.com/photo-1572947650440-e8a97ef053b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Gallery Room">
            </div>
        </div>

        <section id="events" class="events-section">
            <h2 class="section-header">WHAT'S ON THIS WEEK</h2>
            <div class="events-grid">
                <div class="event-card">
                    <div class="date-badge">
                        <span class="day">12</span>
                        <span class="month">NOV</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=600&q=80" alt="Painting">
                    <div class="event-info">
                        <h3>Kids Art Workshop</h3>
                        <p>A fun afternoon of painting and storytelling for children aged 6-12.</p>
                        <a href="#" class="link-btn">Book Spot &rarr;</a>
                    </div>
                </div>
                <div class="event-card">
                    <div class="date-badge">
                        <span class="day">14</span>
                        <span class="month">NOV</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1514525253440-b393452e8d26?auto=format&fit=crop&w=600&q=80" alt="Live Music">
                    <div class="event-info">
                        <h3>Acoustic Night</h3>
                        <p>Live traditional and modern fusion music by local bands.</p>
                        <a href="#" class="link-btn">Get Tickets &rarr;</a>
                    </div>
                </div>
                <div class="event-card">
                    <div class="date-badge">
                        <span class="day">18</span>
                        <span class="month">NOV</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1459908676235-d5f02a50184b?auto=format&fit=crop&w=600&q=80" alt="Pottery">
                    <div class="event-info">
                        <h3>Pottery Class</h3>
                        <p>Learn the basics of clay molding with our resident artist.</p>
                        <a href="#" class="link-btn">Book Spot &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="mosaic-section">
            <div class="basket-wrapper">
                <img src="https://images.unsplash.com/photo-1596263576926-250c60dae56b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rwandan Baskets" class="main-basket-img">
                <div class="quote-box">
                    <p>“Art is not what you see, but what you make others feel — a quiet language that speaks when words fall short.”</p>
                    <span class="author">— Edgar Degas</span>
                </div>
            </div>
        </div>

    </main>

    <section id="gallery" class="gallery-dark">
        <h2 class="gallery-title">OUR ART PIECES</h2>
        <div class="carousel-container">
            <button class="nav-arrow" onclick="slide(-1)">&#10094;</button>
            <div class="gallery-viewport">
                <div class="gallery-track" id="track">
                    <?php
                    $artworks = [
                        ['img' => 'https://images.unsplash.com/photo-1579783902614-a3fb39279c15?auto=format&fit=crop&w=800&q=80', 'price' => '100'],
                        ['img' => 'https://images.unsplash.com/photo-1541963463532-d68292c34b19?auto=format&fit=crop&w=800&q=80', 'price' => '250'],
                        ['img' => 'https://images.unsplash.com/photo-1549887552-93f8efb0818e?auto=format&fit=crop&w=800&q=80', 'price' => '180'],
                        ['img' => 'https://images.unsplash.com/photo-1578321272176-b7bbc0679853?auto=format&fit=crop&w=800&q=80', 'price' => '300'],
                    ];
                    foreach ($artworks as $art) {
                        echo "
                        <div class='art-card'>
                            <img src='{$art['img']}'>
                            <div class='price-tag'>£{$art['price']}</div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
            <button class="nav-arrow" onclick="slide(1)">&#10095;</button>
        </div>
    </section>

    <section id="visit" class="visit-section">
        <div class="visit-container">
            <div class="visit-info">
                <h2>VISIT THE SPACE</h2>
                <p><strong>Opening Hours:</strong><br>Mon - Sat: 9:00 AM - 8:00 PM<br>Sun: Closed</p>
                <p><strong>Location:</strong><br>KK 123 St, Kigali, Rwanda<br>Next to the Community Hall</p>
                <div class="newsletter">
                    <h3>Join our Community</h3>
                    <input type="email" placeholder="Enter your email...">
                    <button>SUBSCRIBE</button>
                </div>
            </div>
            <div class="map-placeholder">
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&w=800&q=80" alt="Map Location">
                <div class="map-pin">📍 We are here</div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Ikingi Arts Space. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>