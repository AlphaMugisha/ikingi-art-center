// 1. PRELOADER LOGIC
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.classList.add('fade-out');
        setTimeout(() => {
            preloader.remove();
        }, 600); // Matches the CSS transition speed
    }
});

// 2. MOBILE MENU TOGGLE
function toggleMenu() {
    const nav = document.getElementById('navLinks');
    const burger = document.querySelector('.hamburger');
    
    nav.classList.toggle('active');
    burger.classList.toggle('active');
}

// 3. SCROLL REVEAL ANIMATION
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
reveal(); // Trigger once on load

// 4. FAQ ACCORDION LOGIC
const faqs = document.querySelectorAll(".faq-question");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        // Close other FAQs
        faqs.forEach(otherFaq => {
            if (otherFaq !== faq) {
                otherFaq.parentElement.classList.remove("active");
            }
        });
        // Toggle current
        const item = faq.parentElement;
        item.classList.toggle("active");
    });
});