<?php

include 'config/config.php' ;

// Set page-specific metadata
$title = "$website" . " - Page 1";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";

?>
<?php include 'includes/header.php'; ?>


<script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0)
            })
        </script>

<section class="banner">
        <div class="banner-overlay">
            <h1>Template Page</h1>
            <p>Copy this code and paste it into a new page for editing.</p>
        </div>
    </section>

    <section class="page">
    <div class="page-content">
        <div class="col-12 col-md-6 text-content">
            <h2>Feel free to contact Us for more information! We'd love to hear from you!</h2>
            <p>We're always looking for more suggestions and recommendations in Germany, Austria, and Switzerland. 
            Have a favorite restaurant, Weinstube, or Gasthaus that has incredible food? Let us know!</p>
        </div>
        <div class="col-12 col-md-6 image-content">
            <img src="/assets/images/ramps2.jpg" alt="Ramps" class="responsive-img" style="width: 400px;">
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
