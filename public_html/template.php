<?php

include 'config/config.php';

// Set page-specific metadata
$title = "$website" . " - Page 1";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";

?>
<?php include 'includes/header.php'; ?>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".sticky-top");
    const menuRow = document.querySelector(".my-menu-row .menu");
    const headerHeight = header.offsetHeight; // Height of the sticky header
    let menuRowOffset = menuRow.getBoundingClientRect().top + window.pageYOffset;

    const updateStickyMenu = () => {
        if (window.scrollY >= menuRowOffset - headerHeight) {
            menuRow.classList.add("sticky");
            menuRow.style.top = `${headerHeight}px`; // Position menu below header
        } else {
            menuRow.classList.remove("sticky");
            menuRow.style.top = ""; // Reset to default
        }
    };

    // Update menuRowOffset on window resize to adjust for layout changes
    window.addEventListener("resize", () => {
        menuRowOffset = menuRow.getBoundingClientRect().top + window.pageYOffset;
    });

    window.addEventListener("scroll", updateStickyMenu);
});
</script>

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
                    <div class="menu sticky-menu py-2 px-3">
                    <div class="st-menu-content"><a href="#day-1" id="page-links">Day 1</a> <a href="#day-2" id="page-links">Day 2</a>  <a href="#day-3" id="page-links">Day 3</a>  <a href="#day-4" id="page-links">Day 4</a>  <a href="#day-5" id="page-links">Day 5</a> <a href="#day-6" id="page-links">Day 6</a> <a href="#day-7" id="page-links">Day 7</a> <a href="#day-8" id="page-links">Day 8</a> <a href="#day-9" id="page-links">Day 9</a> </div> 
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
