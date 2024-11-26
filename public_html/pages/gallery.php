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


<div class="row">
    <div class="col-12">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
                <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="/assets/images/andechs-monastery.jpg" alt="Andechs Monastery">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/rathaus-bamberg.jpg" alt="Bamberg Rathaus">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/munich-meat-market.jpg" alt="Munich Meat Market">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/pretzels-beer.jpg" alt="Pretzels and Beer">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/roast-pork.jpg" alt="Roast Pork">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>   



<?php include __DIR__ . '/../includes/footer.php'; ?>
