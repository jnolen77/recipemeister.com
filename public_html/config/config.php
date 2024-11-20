<?php
// config.php
$stylesheet = "/assets/css/styles.css?v=2.3549"; // Path to your CSS file

$website = "Savor Germany";

$defaultDescription = "Explore culinary vacations and tours in Germany with Savor Germany.";
$defaultKeywords = "culinary tours, Germany, food, travel, cooking";

// Function to generate a full page title
function generateTitle($pageTitle) {
    global $website;
    return "$website - $pageTitle";
}

$menuItems = array(
    "Home" => '/',
    "2025 Tours" => array(
        'Spring 2025' => '/bavarian-breweries-2025/',
        'Oktoberfest 2025' => '/oktoberfest-2025/',
    ),
    "Your Hosts" => '/your-hosts/',
    "Gallery" => '/gallery/',
    "Contact Us" => '/contact-us/',
);

?>
