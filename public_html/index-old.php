<?php

include 'config/config.php' ;

// Set page-specific metadata
$title = "$website" . " - Page 1";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";

?>
<?php include 'assets/templates/header.php'; ?>



            <section class="banner">
                <div class="banner-overlay col-12 col-md-12">
                    <h1>Savor Germany</h1>
                    <p>Experience the food, beer, & wine of Germany with two acclaimed chefs</p>
                </div>
            </section>
            
            <script type="text/javascript">
                window.addEventListener("scroll", function(){
                    var header = document.querySelector("header");
                    header.classList.toggle("sticky", window.scrollY > 0);
                });
            </script>
            
            <!-- Combined Section for Desktop and Mobile with Media Queries for Responsive Layout -->
            <section class="combined-section animate__animated wow animate__zoomIn">
                <div class="">
                    <p id="dynamicText"></p>
                </div>

                <div class="sec1 content-block">
                    <h1 class="animate__animated wow animate__fadeInUp" style="animation-duration:2s;" data-wow-delay="1s">
                        Experience the food, beer, and wine of Germany with two acclaimed chefs.
                    </h1>
                </div>
            
                <div class="sec2 content-block">
                    <p class="animate__animated wow animate__fadeInUp" style="animation-duration:2s;" data-wow-delay="3s">
                        Join us in our culinary adventures in Germany. We offer vacation packages mostly in the southern
                        part of Germany - focusing on Bavaria and the Black Forest region. As chefs, we love to eat when we travel.
                        From Michelin-starred restaurants to roadside stands and beer halls - we're sure you'll love it! We extensively
                        research restaurants, breweries, farmer's markets, vineyards, and more to curate an amazing selection for our trips.
                    </p>
                </div>
            
                <div class="sec3 content-block">
                    <p class="alpineText animate__animated wow animate__fadeInUp" style="animation-duration:2s;" data-wow-delay="5s">
                        Here, some alpine cheeses are on display in the Viktualienmarkt in Munich's old city. The Viktualienmarkt
                        offers visitors many choices.
                    </p>
                </div>
            </section>

            
<?php include 'assets/templates/footer.php'; ?>