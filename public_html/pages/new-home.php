<?php
include __DIR__ . '/../config/config.php'; // Relative path to config.php

// Set page-specific metadata
$title = "$website" . " - Page 1";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
</script>

    <div class="video-container">
        <video autoplay muted loop playsinline>
            <source src="/assets/images/bavarian-mountains.mp4" type="video/mp4">       
            Your browser does not support the video tag.
            </video>
        <div class="overlay-text">
            <h1>Savor Germany</h1>
                <h2>Experience the food, beer, & wine of Germany with two acclaimed chefs</h2>
        </div>
    </div>
            
    <?php include __DIR__ . '/../includes/footer.php'; ?>