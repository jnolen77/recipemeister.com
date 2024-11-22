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
    <div class="dropdown">
  <div class="dropbtn">Dropdown</div>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
    </section>


    <?php include __DIR__ . '/../includes/footer.php'; ?>