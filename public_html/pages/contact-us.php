<?php

include __DIR__ . '/../config/config.php';

$title = "$website | Culinary Travel in Germany";
$description = "Discover the best of Germany with Savor Germany! Explore curated culinary, brewery, and winery tours, authentic German recipes, and insider travel tips.";
$keywords = "Germany travel, German food tours, Brewery tours in Germany, German wine tours, Culinary tours Germany, Authentic German recipes, German beer culture, Oktoberfest experiences, German wineries, Best German restaurants, Travel Germany food, Savor Germany tours, German cuisine experiences, German culinary adventures, Food and beer Germany, German food culture, German vineyards, German cooking, Germany beer festivals, Wine tasting Germany, German culinary travel, Foodie tours Germany, Best breweries Germany, German travel guide, Authentic German food, Travel Germany wine, Beer tours Bavaria, Explore Germany food";
?>
<?php 
include __DIR__ . '/../includes/header.php';

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
        <div class="sepmd"></div>
            <h2>Feel free to contact Us for more information! We'd love to hear from you!</h2>
            <p>We're always looking for more suggestions and recommendations in Germany, Austria, and Switzerland. 
            Have a favorite restaurant, Weinstube, or Gasthaus that has incredible food? Let us know!</p>
            <div class="seplg"></div>
            <script src="https://www.cognitoforms.com/f/seamless.js" data-key="OI_LzSWKxkCZJEPTm45_yQ" data-form="1"></script>
        </div>
    </div>
</section>

<div class="seplg"></div>

<?php include __DIR__ . '/../includes/footer.php'; ?>