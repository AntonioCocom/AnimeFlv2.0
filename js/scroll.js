function scrollToTop() {
    let currentPosition = window.pageYOffset;
    const targetPosition = 0;
    const animationDuration = 100;
    const startTime = performance.now();

    function scroll() {
        const currentTime = performance.now();
        const progress = Math.min((currentTime - startTime) / animationDuration, 1);

        window.scrollTo(0, currentPosition + (targetPosition - currentPosition) * progress);

        if (progress < 1) {
            requestAnimationFrame(scroll);
        }
    }

    requestAnimationFrame(scroll);
}

window.addEventListener('scroll', function() {
    const btnScrollToTop = document.querySelector('.btn-scroll-to-top');
    if (window.scrollY > 100) {
        btnScrollToTop.style.display = 'block';
    } else {
        btnScrollToTop.style.display = 'none';
    }
});