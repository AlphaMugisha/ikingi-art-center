<?php include 'includes/header.php'; ?>

<header class="hero-section">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="https://videos.pexels.com/video-files/3205915/3205915-hd_1920_1080_25fps.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1 class="main-title reveal">
            <span class="text-yellow">IKINGI</span> <span class="text-green">ARTS</span> <span class="text-red">SPACE</span>
        </h1>
        <p class="hero-subtitle reveal">Where Culture Meets Creativity</p>
    </div>

    <div class="custom-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</header>

<div class="marquee-container">
    <div class="marquee-content">
        EXHIBITIONS • WORKSHOPS • LIVE MUSIC • CULTURE • STORYTELLING • ART CLASSES • EXHIBITIONS • WORKSHOPS • LIVE MUSIC • CULTURE
    </div>
</div>

<main class="container">
    <div class="content-block reveal">
        <div class="image-wrapper"><img src="https://images.unsplash.com/photo-1533575770077-052fa2c609fc?w=800&q=80"></div>
        <div class="text-wrapper">
            <h2>Welcome to Ikingi Arts Space</h2>
            <p>Ikingi Arts Space is a creative hub where art, culture, and community come together through exhibitions, open mics, and cultural experiences.</p>
        </div>
    </div>

    <div class="content-block reverse reveal">
        <div class="text-wrapper">
            <h2>Discover Rwandan History</h2>
            <p>We are a space where history, culture, and contemporary art come together through exhibitions, workshops, and storytelling.</p>
        </div>
        <div class="image-wrapper"><img src="https://images.unsplash.com/photo-1572947650440-e8a97ef053b2?w=800&q=80"></div>
    </div>

    <div class="mosaic-section reveal">
        <div class="basket-wrapper">
            <img src="https://images.unsplash.com/photo-1596263576926-250c60dae56b?w=800&q=80" class="main-basket-img">
            <div class="quote-box">
                <p>“Art is not what you see, but what you make others feel — a quiet language that speaks when words fall short.”</p>
                <span class="author">— Edgar Degas</span>
            </div>
        </div>
    </div>
</main>

<section class="sponsors-section reveal">
    <h2 class="section-header">OUR PARTNERS</h2>
    <div class="logo-slider">
        <div class="logo-slide-track">
            <?php 
            $sponsors = [
                ['name' => 'Kigali Art', 'color' => 'e91e63'],
                ['name' => 'Culture Hub', 'color' => '9c27b0'],
                ['name' => 'Rwanda Tours', 'color' => '2196f3'],
                ['name' => 'Design Lab', 'color' => '4caf50'],
                ['name' => 'Eco Vibe', 'color' => '795548']
            ];
            // Render twice for infinite loop
            for($i=0; $i<2; $i++) {
                foreach ($sponsors as $s) {
                    echo "<div class='slide'><img src='https://placehold.co/200x80/f0f0f0/{$s['color']}?text={$s['name']}'></div>";
                }
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>