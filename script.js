let currentPosition = 0;

function slide(direction) {
    const track = document.getElementById('track');
    const cardWidth = 410; // 390px width + 20px gap
    
    // Move position
    currentPosition += (direction * -cardWidth);

    // Hard Stop limits
    if (currentPosition > 0) currentPosition = 0;
    if (currentPosition < -820) currentPosition = -820; 

    track.style.transform = `translateX(${currentPosition}px)`;
}