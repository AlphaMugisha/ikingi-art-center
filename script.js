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
reveal(); 

// 2. FAQ Accordion Logic
const faqs = document.querySelectorAll(".faq-question");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faqs.forEach(otherFaq => {
            if (otherFaq !== faq) {
                otherFaq.parentElement.classList.remove("active");
            }
        });
        const item = faq.parentElement;
        item.classList.toggle("active");
    });
});

// 3. Mobile Menu Toggle
function toggleMenu() {
    const nav = document.getElementById('navLinks');
    const burger = document.querySelector('.hamburger');
    
    nav.classList.toggle('active');
    burger.classList.toggle('active');
}
// ================= PRELOADER LOGIC =================
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        // Add the fade-out class to trigger the CSS transition
        preloader.classList.add('fade-out');
        
        // Optional: Remove from DOM after transition ends to clear memory
        setTimeout(() => {
            preloader.remove();
        }, 500); // Match the CSS transition duration (0.5s)
    }
});
// ===================================================

// ... keep your existing Scroll Reveal, FAQ, and Menu code below ...