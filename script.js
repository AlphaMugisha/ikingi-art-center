// 1. Scroll Reveal Logic
window.addEventListener('scroll', reveal);

function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }
    }
}

// Trigger once on load
reveal();

// 2. Carousel Logic (Same as before)
let currentPosition = 0;

function slide(direction) {
    const track = document.getElementById('track');
    // Adjusted for new card styling (390px + 20px gap)
    const cardWidth = 410; 
    
    currentPosition += (direction * -cardWidth);

    if (currentPosition > 0) currentPosition = 0;
    if (currentPosition < -820) currentPosition = -820; 

    track.style.transform = `translateX(${currentPosition}px)`;
}
// 1. Scroll Reveal Logic
window.addEventListener('scroll', reveal);

function reveal() {
    var reveals = document.querySelectorAll('.reveal');
    for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;
        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        }
    }
}
reveal(); // Trigger once on load to show top elements

// 2. FAQ Accordion Logic
const faqs = document.querySelectorAll(".faq-question");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        // Close others (Optional - remove this loop if you want multiple open at once)
        faqs.forEach(otherFaq => {
            if (otherFaq !== faq) {
                otherFaq.parentElement.classList.remove("active");
            }
        });
        
        const item = faq.parentElement;
        item.classList.toggle("active");
    });
});
// ... (Keep all your existing code above) ...

// 4. Mobile Menu Toggle
function toggleMenu() {
    const nav = document.getElementById('navLinks');
    const burger = document.querySelector('.hamburger');
    
    nav.classList.toggle('active');
    burger.classList.toggle('active');
}