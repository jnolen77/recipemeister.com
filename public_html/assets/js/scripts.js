// Toggle the mobile menu on hamburger click

document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll("img.lazy");

    const lazyLoad = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove("lazy");
                observer.unobserve(img);
            }
        });
    };

    const observer = new IntersectionObserver(lazyLoad);
    lazyImages.forEach(img => observer.observe(img));
});

// Typewriter Effect
const text = "Willkommen to Savor Germany";
let index = 0;

function typeWriter() {
    if (index < text.length) {
        document.getElementById("dynamicText").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, 100);
    }
}

// WOW.js Initialization
new WOW().init();

// Navbar Open/Close
function openNav() {
    document.getElementById("mySidenav").classList.add("open");
}

function closeNav() {
    document.getElementById("mySidenav").classList.remove("open");
}

window.addEventListener("scroll", function(){
     var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});
