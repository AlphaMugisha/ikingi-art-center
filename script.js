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