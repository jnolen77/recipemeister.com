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


document.querySelectorAll('.sidenav .dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', function () {
        this.classList.toggle('open');
        const dropdownMenu = this.nextElementSibling;
        if (dropdownMenu) {
            dropdownMenu.style.display = dropdownMenu.style.display === 'flex' ? 'none' : 'flex';
        }
    });
});


window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

/* contact form script */



let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('flodesk-popup');
    const closeButton = document.getElementById('close-popup');
    let popupShown = false; // Prevents showing the popup multiple times

    function handleScroll() {
        if (!popupShown && window.scrollY > 100) { // Adjust the scroll threshold as needed
            popup.classList.add('visible');
            popupShown = true;
        }
    }

    // Close popup event
    closeButton.addEventListener('click', function () {
        popup.classList.remove('visible');
    });

    // Show popup on scroll
    window.addEventListener('scroll', handleScroll);
});
