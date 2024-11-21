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
<div class="seplg"></div>
    <div class="constrain">
        <div class="row">
            <div class="col-md-12 tac">
                <h1>Discover the best Germany has to offer!</h1>
                <div class="sepsm"></div>
                <p>
                At Savor Germany we are passionate about food and travel. We are chefs who love to travel and love to eat. After over twenty years of experience cooking German food and traveling throughout Germany, we decided to share what we've learned.  We've handpicked some of our favorite tours, restaurants, breweries, vineyards, and more to share with you.    
                </p>
                <p>Germany is a country rich in gastronomic heritage and vibrant culinary traditions. Join us on an unforgettable journey hosted by renowned chefs Jeremy Nolen and Jessica Vogel, authors of the celebrated cookbook “New German Cooking.” Our expertly curated tours are designed to immerse you in the authentic flavors and experiences that make Germany a food and beverage lover's paradise.
                </p>
                <p>Embark on a culinary adventure that takes you beyond the typical tourist path, delving into the heart of Germany's food culture. With Jeremy and Jessica as your guides, you will discover hidden gems and iconic establishments alike, visiting acclaimed restaurants, charming breweries, and picturesque vineyards. Each destination is carefully selected to showcase the diversity and depth of German cuisine, from hearty regional specialties to innovative modern dishes.</p>
                <p>Our tours offer a unique opportunity to engage with local artisans and producers. Visit bustling farmer's markets brimming with fresh, seasonal produce, and meet the passionate bakers, butchers, and winemakers who uphold Germany's culinary traditions. Whether you're savoring a perfectly crafted pastry, sampling a robust craft beer, or enjoying a sumptuous meal in a historic restaurant, you'll gain a deeper appreciation for the craftsmanship and dedication that goes into every bite.</p>
                <p>Join us for an unforgettable experience and enrich your understanding of German culinary culture. Our food and beverage tours are not just about tasting delicious dishes; they're about connecting with the people, stories, and traditions that make German cuisine so special. Prepare to indulge in a journey of flavors with chefs Jeremy Nolen and Jessica Vogel, and create memories that will last a lifetime.</p>
            </div>
        </div>
        <div class="seplg"></div>
        
    </div>
       <div class="seplg"></div>     
    <?php include __DIR__ . '/../includes/footer.php'; ?>