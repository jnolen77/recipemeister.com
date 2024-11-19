<?php
include __DIR__ . '/../config/config.php'; // Relative path to config.php

// Set page-specific metadata
$title = "$website" . " | Breweries of Bavaria & Franconia";
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
        <h2>Bavaria & Franconia plus Springfest in Munich</h2>
            <p>Join chefs Jeremy and Jessica Nolen on an unforgettable culinary adventure through 
                    the heart of Bavaria and Franconia with Savor Germany's exclusive food and beer tour. 
                    Explore the rich traditions of Munich, Nuremberg, and Bamberg as you indulge in regional 
                    specialties and sip world-renowned beers in the cities that perfected them. From the vibrant 
                    beer halls of Munich to the historic breweries of Bamberg, this tour offers a delicious journey 
                    through Germany's most iconic culinary landscapes, all while learning insider tips from two expert 
                    chefs with deep ties to the region.</p>
                    <p>
                    Springfest in Munich, or Frühlingsfest, is a lively annual festival held in Munich during late April 
                    and early May. Often referred to as the “little sister” of Oktoberfest, it offers a similar atmosphere 
                    with a more relaxed and local vibe. Hosted at the Theresienwiese, the same grounds as Oktoberfest, Springfest 
                    features traditional Bavarian beer tents, carnival rides, games, and delicious regional food like pretzels, 
                    sausages, and roast chicken. Visitors enjoy the festive spirit with live music, cultural events, and fireworks 
                    displays, making it a fantastic way to experience Bavarian traditions without the Oktoberfest crowds.
                    </p>
                    <p><strong>$2,622</strong> - per person LAND only (based on double occupancy)</p>
                    <p><strong>$3,225</strong> - for solo travel</p>
        </div>
        <div class="col-6 text-content">
            <h4>Your Tour at a Glance</h4>
            <strong>Stay</strong> 9 Days 8 Nights <br />
            <strong>Meals</strong> 13 Meals 7 Breakfasts | 5 Lunches | 5 Dinners <br />
            <strong>Activity Level</strong> 3 - Moderate walking involved. <br />
            <strong>Travel Style</strong> Combination of trains and walking. <br />
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
