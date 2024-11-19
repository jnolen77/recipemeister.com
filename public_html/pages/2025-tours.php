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

<div class="video-container" style="height:550px !important;">
        <video autoplay muted loop playsinline>
            <source src="/assets/images/bavarian-mountains.mp4" type="video/mp4">       
            Your browser does not support the video tag.
            </video>
        <div class="overlay-text">
            <h1>Bavaria & Franconia plus Springfest in Munich</h1>
                
        </div>
    </div>

<section class="page">
    <div class="page-content">
        <div class="col-12 col-md-6 text-content">
            <h2>Feel free to contact Us for more information! We'd love to hear from you!</h2>
            <p><p>Join chefs Jeremy and Jessica Nolen on an unforgettable culinary adventure through 
                    the heart of Bavaria and Franconia with Savor Germany's exclusive food and beer tour. 
                    Explore the rich traditions of Munich, Nuremberg, and Bamberg as you indulge in regional 
                    specialties and sip world-renowned beers in the cities that perfected them. From the vibrant 
                    beer halls of Munich to the historic breweries of Bamberg, this tour offers a delicious journey 
                    through Germany's most iconic culinary landscapes, all while learning insider tips from two expert 
                    chefs with deep ties to the region.</p></p>
        </div>
        <div class="col-12 col-md-6 image-content">
            <img src="/assets/images/ramps2.jpg" alt="Ramps" class="responsive-img" style="width: 400px;">
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
