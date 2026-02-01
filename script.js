let offset = 0;
function slide(direction) {
    const track = document.getElementById('track');
    // Move by 400px (card width + gap)
    if (direction === 1) {
        offset -= 400;
    } else {
        offset += 400;
    }
    track.style.transform = `translateX(${offset}px)`;
}