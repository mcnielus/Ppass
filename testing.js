const slider = document.querySelector(".slider");
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");
const slideWidth = slider.querySelector(".slide").clientWidth;

let currentIndex = 0;
let autoSlideInterval;

function goToSlide(index) {
	slider.style.transform = `translateX(-${index * slideWidth}px)`;
	currentIndex = index;
}

function autoSlide() {
	autoSlideInterval = setInterval(() => {
		if (currentIndex < slider.children.length - 1) {
			goToSlide(currentIndex + 1);
		} else {
			goToSlide(0);
		}
	}, 5000); // Adjust the interval in milliseconds (e.g., 3000ms = 3 seconds)
}

prevButton.addEventListener("click", () => {
	if (currentIndex > 0) {
		clearInterval(autoSlideInterval);
		goToSlide(currentIndex - 1);
		autoSlide();
	}
});

nextButton.addEventListener("click", () => {
	if (currentIndex < slider.children.length - 1) {
		clearInterval(autoSlideInterval);
		goToSlide(currentIndex + 1);
		autoSlide();
	}
});

// Handle window resize for responsive behavior
window.addEventListener("resize", () => {
	slideWidth = slider.querySelector(".slide").clientWidth;
	goToSlide(currentIndex);
});


// Initial slide positioning and start auto slideshow
goToSlide(currentIndex);
autoSlide();