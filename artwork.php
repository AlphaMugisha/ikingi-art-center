<?php include 'includes/header.php'; ?>

<div class="sub-header">
    <h1>OUR ART COLLECTION</h1>
</div>

<section class="gallery-dark">
    <div class="container">
        <div class="artwork-grid">
            <?php
            $artworks = [
                ['img' => 'https://images.unsplash.com/photo-1579783902614-a3fb39279c15?w=800', 'price' => '100'],
                ['img' => 'https://images.unsplash.com/photo-1541963463532-d68292c34b19?w=800', 'price' => '250'],
                ['img' => 'https://images.unsplash.com/photo-1549887552-93f8efb0818e?w=800', 'price' => '180'],
                ['img' => 'https://images.unsplash.com/photo-1578321272176-b7bbc0679853?w=800', 'price' => '300'],
                ['img' => 'https://images.unsplash.com/photo-1580130379745-139979752741?w=800', 'price' => '150'],
                ['img' => 'https://images.unsplash.com/photo-1577083552431-6e5fd01aa342?w=800', 'price' => '400'],
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
</section>

<?php include 'includes/footer.php'; ?>