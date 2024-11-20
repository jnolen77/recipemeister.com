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
                <h1>Discover the best Germany as to offer!</h1>
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
        <div class="row tac">
            <div class="col-md-6 tac">
            <h3>Who We Are</h3>
            </div>
        </div>
        <div class="sepmd"></div>
        <div class="row">
            <div class="col-md-6 tac">
                
                <h4>Jeremy Nolen</h4>
                <p>Jeremy grew up with food at the forefront. His father was an award winning chef and oftentimes vacation meant food. Everywhere they went they would seek out the best butcher shops, markets, restaurants, and cuisine from all over the world. </p>
                <p>Growing up in a heavily German immigrant community meant exposure to all things German from an early age. Private German clubs, restaurants, markets, and butcher shops were plentiful and it was this experience that engrained his love for the culture of Germany, and especially the food.</p>
                <p>After learning to cook German food at two private German clubs, he left for Philadelphia eventually opening the acclaimed German restaurant, Brauhaus Schmitz. It was at this restaurant where he solidified his expertise on German food winning multiple awards including Rising Star Chef 2013, several Best of Philly awards, and more. He has appeared on Food Network shows and has been published in Food & Wine, Saveur, Bon Appetit, the Philadelphia Inquirer, the Washington Post, and many online publications. </p>
            </div>
            <div class="col-md-6 tac">
                <img src="/assets/images/jeremy-portrait.jpg" alt="Jeremy Portrait" class="tac" style="width:325px; height:auto; margin-top:50px;">
            </div>
        </div>
        <div class="sepxl"></div>
        <div class="row">
            <div class="col-md-6 tac">
                
                <h4>Jessica Vogel</h4>
                <p>Jessica Vogel is a distinguished pastry chef and author who has made her mark in the culinary world with her exceptional talent and creative vision. She honed her skills at the renowned Brauhaus Schmitz in Philadelphia, where she became known for her innovative takes on traditional German pastries. Jessica's work at Brauhaus Schmitz showcased her ability to blend classic flavors with modern techniques, earning her accolades and a devoted following.</p>
                <p>In addition to her work in the kitchen, Jessica is also an accomplished author, sharing her culinary expertise and passion for pastries through her writings. Her contributions to the world of pastry have not only delighted taste buds but also inspired aspiring chefs and food enthusiasts.</p>
                <p>Drawing from her extensive experience and love for travel, Jessica now hosts food and beverage tours throughout Germany with her husband, Jeremy. Together, they guide travelers on a gastronomic journey, exploring the rich culinary traditions and vibrant flavors of Germany. With a career marked by creativity, dedivation, and a love for the craft, Jessica Vogel continues to be a prominent and influential figure in the culinary arts.</p>
            </div>
            <div class="col-md-6 tac">
                <img src="/assets/images/jessica-portrait.jpg" alt="Jessica Portrait" class="tac" style="width:325px; height:auto; margin-top:50px;">
            </div>
        </div>
    </div>
       <div class="seplg"></div>     
    <?php include __DIR__ . '/../includes/footer.php'; ?>