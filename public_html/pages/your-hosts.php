<?php
include __DIR__ . '/../config/config.php'; 
include __DIR__ . '/../includes/header.php';

$title = "$website" . " - Page 1";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";
?>


<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
</script>
<section class="banner" style="height: 40vh;">
        <div class="banner-overlay">
            <h1 style="margin-top:150px;">Your Hosts</h1>
        </div>
    </section>

    <div class="constrain">
        <div class="seplg"></div>
        <div class="row">
            <div class="col-md-6 tac">
                
                <h4>Jeremy Nolen</h4>
                <p>Jeremy grew up with food at the forefront. His father was an award winning chef and oftentimes vacation meant food. Everywhere they went they would seek out the best butcher shops, markets, restaurants, and cuisine from all over the world. </p>
                <p>Growing up in a heavily German immigrant community meant exposure to all things German from an early age. Private German clubs, restaurants, markets, and butcher shops were plentiful and it was this experience that engrained his love for the culture of Germany, and especially the food.</p>
                <p>After learning to cook German food at two private German clubs, he left for Philadelphia eventually opening the acclaimed German restaurant, Brauhaus Schmitz. It was at this restaurant where he solidified his expertise on German food winning multiple awards including Rising Star Chef 2013, several Best of Philly awards, and more. He has appeared on Food Network shows and has been published in Food & Wine, Saveur, Bon Appetit, the Philadelphia Inquirer, the Washington Post, and many online publications. </p>
            </div>
            <div class="col-md-6 tac">
                <img src="/assets/images/jeremy-portrait.jpg" alt="Jeremy Portrait" class="tac" style="width:325px; height:auto; margin-top:50px;">
            </div>
        </div>
        <div class="sepxl"></div>
        <div class="row">
            <div class="col-md-6 tac">
                
                <h4>Jessica Vogel</h4>
                <p>Jessica Vogel is a distinguished pastry chef and author who has made her mark in the culinary world with her exceptional talent and creative vision. She honed her skills at the renowned Brauhaus Schmitz in Philadelphia, where she became known for her innovative takes on traditional German pastries. Jessica's work at Brauhaus Schmitz showcased her ability to blend classic flavors with modern techniques, earning her accolades and a devoted following.</p>
                <p>In addition to her work in the kitchen, Jessica is also an accomplished author, sharing her culinary expertise and passion for pastries through her writings. Her contributions to the world of pastry have not only delighted taste buds but also inspired aspiring chefs and food enthusiasts.</p>
                <p>Drawing from her extensive experience and love for travel, Jessica now hosts food and beverage tours throughout Germany with her husband, Jeremy. Together, they guide travelers on a gastronomic journey, exploring the rich culinary traditions and vibrant flavors of Germany. With a career marked by creativity, dedivation, and a love for the craft, Jessica Vogel continues to be a prominent and influential figure in the culinary arts.</p>
            </div>
            <div class="col-md-6 tac">
                <img src="/assets/images/jessica-portrait.jpg" alt="Jessica Portrait" class="tac" style="width:325px; height:auto; margin-top:50px;">
            </div>
        </div>
    </div>


<?php include __DIR__ . '/../includes/footer.php'; ?>
