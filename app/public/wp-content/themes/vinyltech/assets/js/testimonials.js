document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.testimonial-slider');

    sliders.forEach((slider) => {
        const slides = slider.querySelectorAll('.testimonial-slide');
        const previousButton = slider.querySelector('.testimonial-prev');
        const nextButton = slider.querySelector('.testimonial-next');
        const currentCounter = slider.querySelector('.testimonial-current');

        if (!slides.length) {
            return;
        }

        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, slideIndex) => {
                slide.classList.toggle(
                    'is-active',
                    slideIndex === index
                );
            });

            currentCounter.textContent = index + 1;
        }

        previousButton.addEventListener('click', () => {
            currentIndex--;

            if (currentIndex < 0) {
                currentIndex = slides.length - 1;
            }

            showSlide(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            currentIndex++;

            if (currentIndex >= slides.length) {
                currentIndex = 0;
            }

            showSlide(currentIndex);
        });
    });
});