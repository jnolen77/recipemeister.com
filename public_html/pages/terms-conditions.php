<?php
include __DIR__ . '/../config/config.php'; // Relative path to config.php

// Set page-specific metadata
$title = "$website" . " | Breweries of Bavaria & Franconia";
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

<section class="banner" style="height: 40vh;">
        <div class="banner-overlay">
        
        </div>
    </section>

<section class="page">

    <div class="page-content">
        <div class="row">
        <div class="seplg"></div>
            <div class="col-md-12">
            <h1>Booking Terms & Conditions</h1>
<div class="sepmd"></div>
<h4>1. Reserving Your Tour/Payments</h4>
<p>To reserve your spot on a Savor Germany tour, a deposit ranging from $500 to $1,500 per person is required, with $350 being non-refundable for administrative fees. Full payment can be made at the time of booking. Payments can be made by mail, online, or over the phone. Checks or wire transfers should be made payable to Savor Germany. Online payments can be made using a debit or credit card with the Visa or MasterCard logo. The final payment must be received 60 days prior to departure. If the balance is not paid 60 days before the trip's departure date, Savor Germany reserves the right to cancel your reservation. All payments must be made in US dollars.</p>

<h4>2. Travel Information Packet</h4>
<p>Once we receive your deposit, we will send you detailed information about your trip, including what to bring, how to prepare, travel directions, a detailed itinerary, and Savor Germany's policies.</p>

<h4>3. Health & Capabilities</h4>
<p>The physical requirements for each tour may vary. Please select a tour that matches your capabilities. Our tours often involve considerable walking, which may be challenging for travelers with limited mobility. As the Americans with Disabilities Act does not apply abroad, and service providers may not accommodate special equipment, all travelers must be in good health. Any conditions requiring special assistance or medical attention must be reported at the time of reservation. As our tours are gastronomic, please inform us in advance of any food allergies.</p>

<h4>4. Passports, Visas, & Travel Documents</h4>
<p>You are responsible for obtaining and verifying travel documents and entry requirements for each country on your itinerary. US citizens must have a passport valid for at least six months beyond the tour completion date for all trips outside the United States.</p>

<h4>5. Arrival and Departure</h4>
<p>Each trip begins and ends in a town accessible by plane, train, boat, or bus. The meeting and ending locations are listed on each trip itinerary. If you prefer to arrive at the starting point the night before the trip, we can provide accommodation recommendations.</p>

<h4>6. Accommodations</h4>
<p>Trip prices are based on double occupancy. Solo travelers must pay a single supplement, which will be invoiced 60 days before departure.</p>

<h4>7. Photography</h4>
<p>Savor Germany may use any photographs, film, digital, or video likenesses taken of participants for educational and promotional purposes without compensation to the participants.</p>

<h4>8. Travel Insurance</h4>
<p>We recommend obtaining travel insurance, such as Travel Guard International, to protect against non-refundable air and land costs in case of trip cancellations due to personal or family illness or accident.</p>

<h4>9. Local Laws Abroad</h4>
<p>You agree to abide by all local laws when traveling abroad. Violation of local laws, even unintentionally, waives your right to a refund, and Savor Germany may send you home at your expense. You will be subject to the laws of the country you are visiting.</p>

<h4>10. Disclaimer & Responsibility Release</h4>
<p>You are responsible for selecting a trip that matches your abilities, fitness, and health. Please contact Savor Germany if you need assistance in choosing the right trip. You are also responsible for reading the pre-trip information and bringing appropriate clothing and equipment, as well as adhering to the customs and laws of the regions visited. Savor Germany reserves the right to accept, remove, retain, or decline any trip member at any time for any reason. By paying your deposit, you accept the terms and conditions, and general information listed on our website and trip departure materials. Savor Germany, its members, employees, and agents, are not liable for any claims, damages, expenses, or other financial loss arising from any injury, accident, death, cancellation, delay, alteration, or inconvenience caused by any service provider or other tour members, or due to weather, sickness, strikes, or any cause beyond our control.</p>

<h4>11. Refunds & Cancellation Policy</h4>
<p>To cancel a trip, you must notify us in writing via email. Savor Germany reserves the right to cancel a trip for any reason. In such cases, we will refund all payments received, which constitutes full settlement. If you cancel your reservation, the following fees apply:</p>
<ul>
    <li>91+ days: $50</li>
    <li>61-90 days: $300</li>
    <li>46-60 days: 50% of trip price</li>
    <li>31-45 days: 75% of trip price</li>
    <li>0-30 days: 100% of trip price</li>
</ul>

<h4>12. Trip Price Includes</h4>
<ul>
    <li>First-class accommodations based on double occupancy</li>
    <li>Breakfasts, most dinners, and some lunches</li>
    <li>Park entry fees</li>
    <li>Scheduled admission fees to historic sites</li>
    <li>Gratuities for hotels, meals, and baggage</li>
    <li>Trip literature</li>
    <li>Experienced guides</li>
    <li>All transportation during the trip (unless otherwise noted)</li>
</ul>

<h4>13. Trip Price Does Not Include</h4>
<ul>
    <li>Transportation to and from the trip's starting point</li>
    <li>Alcoholic beverages (unless served with meals)</li>
    <li>Personal expenses</li>
    <li>Non-scheduled visits and activities</li>
</ul>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>