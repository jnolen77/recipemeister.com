<?php

include 'config/config.php';

// Set page-specific metadata
$title = "$website" . " - Page 1";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";

?>
<?php include 'includes/header.php'; ?>


<section class="banner" style="height:600px;">
    <div class="sticky-top tac">
        <h1>Beer & Food Lover's Tour of Bavaria & Franconia</h1>
        
    </div>
   
</section>

<section class="page">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-md-6 text-content">
                <h2>Feel free to contact us for more information! We'd love to hear from you!</h2>
                <p>We're always looking for more suggestions and recommendations in Germany, Austria, and Switzerland. Have a favorite restaurant, Weinstube, or Gasthaus that has incredible food? Let us know!</p>
            </div>
            <div class="col-12 col-md-6 image-content">
                <img src="/assets/images/ramps2.jpg" alt="Ramps" class="responsive-img" style="width: 400px;">
            </div>
        </div>
    </div>
</section>


<div class="constrain">  
            <div class="row my-menu-row">
                <!-- Menu to Stick -->
                <div class="col text-center">
                    <div class="menu sticky-menu">
                        <div class="st-menu-content">
                            <div class="menu-item"><a href="#day-1">Day 1</a></div>
                            <div class="menu-item"><a href="#day-2">Day 2</a></div>
                            <div class="menu-item"><a href="#day-3">Day 3</a></div>
                            <div class="menu-item"><a href="#day-4">Day 4</a></div>
                            <div class="menu-item"><a href="#day-5">Day 5</a></div>
                            <div class="menu-item"><a href="#day-6">Day 6</a></div>
                            <div class="menu-item"><a href="#day-7">Day 7</a></div>
                            <div class="menu-item"><a href="#day-8">Day 8</a></div>
                            <div class="menu-item"><a href="#day-9">Day 9</a></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Content Below -->
             <div class="seplg"></div>
            <div class="row">
                <div class="col">
                    <p>Scroll down to test...</p>
                    <p style="min-height:1500px;">Lots of content here!</p>
                </div>
            </div>
</div>       


<?php include 'includes/footer.php'; ?>
