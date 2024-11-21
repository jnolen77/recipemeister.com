
<footer class="footer">
    <div class="footer-column tac">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
    </div>
    <div class="footer-column tac">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="/2025-tours">2025 Tours</a></li>
            <li><a href="/your-hosts">Your Hosts</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/contact-us">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer-column tac">
        <h3>Contact Us</h3>
        <ul>
        <li><a href="mailto:info@savorgermany.com" class="footer-link">info@savorgermany.com</a></li>
        <li><a href="tel:2672165877" class="footer-link">(267) 216-5877</a></li>
    </div>
    
</footer>

<script>
const text = "Willkommen to Savor Germany";
let index = 0;

function typeWriter() {
    if (index < text.length) {
        document.getElementById("dynamicText").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, 100);
    }
}
</script>

<!--JQUERY CDN LINK-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+4Z2u6I4=" crossorigin="anonymous"></script>


<!--WOW.JS LINK-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" ></script>
<script src="/assets/js/script.js"></script>
<script>
new WOW().init();
</script>

<!--New Navbar script-->
<script>
function openNav() {
    document.getElementById("mySidenav").classList.add("open");
}

function closeNav() {
    document.getElementById("mySidenav").classList.remove("open");
}
</script>
<!--End new navbar script-->


</body>
</html>