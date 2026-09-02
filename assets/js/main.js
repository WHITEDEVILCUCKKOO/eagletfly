// ==================== new counting function 
document.querySelectorAll(".qunik-count").forEach((counter) => {

    const target = parseFloat(counter.dataset.target);
    const suffix = counter.dataset.suffix || "";
    const duration = 2000;
    const startTime = performance.now();

    function count(currentTime) {

        const progress = Math.min(
            (currentTime - startTime) / duration,
            1
        );

        const ease = 1 - Math.pow(1 - progress, 3);
        const value = target * ease;

        counter.textContent =
            (target % 1 !== 0 ? value.toFixed(1) : Math.floor(value))
            + suffix;

        if (progress < 1) {
            requestAnimationFrame(count);
        }
    }

    requestAnimationFrame(count);
});


// how to use this new counting function in html
// <span class="qunik-count" data-target="1.2" data-suffix="M">0</span>
// <span class="qunik-count" data-target="98.9" data-suffix="%">0</span>
// <span class="qunik-count" data-target="10" data-suffix="K+">0</span>

