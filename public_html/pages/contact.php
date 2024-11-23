<?php

include __DIR__ . '/../config/config.php';
include __DIR__ . '/../includes/header.php';

$title = "$website | Culinary Travel in Germany";
$description = "Discover the best of Germany with Savor Germany! Explore curated culinary, brewery, and winery tours, authentic German recipes, and insider travel tips.";
$keywords = "Germany travel, German food tours, Brewery tours in Germany, German wine tours, Culinary tours Germany, Authentic German recipes, German beer culture, Oktoberfest experiences, German wineries, Best German restaurants, Travel Germany food, Savor Germany tours, German cuisine experiences, German culinary adventures, Food and beer Germany, German food culture, German vineyards, German cooking, Germany beer festivals, Wine tasting Germany, German culinary travel, Foodie tours Germany, Best breweries Germany, German travel guide, Authentic German food, Travel Germany wine, Beer tours Bavaria, Explore Germany food";
?>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
</script>

<section class="banner" style="height: 40vh;">
        <div class="banner-overlay">
            <h1 style="margin-top: 150px;">Contact Us</h1>
        </div>
    </section>

    <section class="page">
    <div class="page-content">
        <div class="col-12 col-md-12 text-content">
            <h2>Feel free to contact Us for more information! We'd love to hear from you!</h2>
            <p>We're always looking for more suggestions and recommendations in Germany, Austria, and Switzerland. 
            Have a favorite restaurant, Weinstube, or Gasthaus that has incredible food? Let us know!</p>

        </div>
    </div>
</section>
<div class="container">
    <div class="col-md-3"></div>
    <div class="row tac">
        <div class="col-md-6">
        <form id="contactForm">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    
    <label for="message">Message</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <!-- Bot field -->
    <input type="hidden" id="botField" name="botField">

    <button type="submit">Send</button>
    </form>
    <div id="responseMessage"></div>

    <div id="responseMessage"></div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="seplg"></div>

<?php include __DIR__ . '/../includes/footer.php'; ?>