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

document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    
    if (document.getElementById('botField').value !== '') {
        document.getElementById('responseMessage').innerHTML = 
            '<div class="error">Bot detected. Submission blocked.</div>';
        return;
    }

    const formData = new FormData(this);
    fetch('https://recipemeister.com/send_email', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const responseMessage = document.getElementById('responseMessage');
        if (data.success) {
            responseMessage.innerHTML = 
                '<div class="success">Message sent successfully!</div>';
            document.getElementById('contactForm').reset();
        } else {
            responseMessage.innerHTML = 
                '<div class="error">Error sending message. Please try again later.</div>';
        }
    })
    .catch(() => {
        document.getElementById('responseMessage').innerHTML = 
            '<div class="error">An error occurred. Please try again later.</div>';
    });
});

const botField = document.createElement('input');
botField.type = 'text';
botField.name = 'botField';
botField.id = 'botField';
botField.style.display = 'none'; // Ensures it's hidden
document.getElementById('contactForm').appendChild(botField);
