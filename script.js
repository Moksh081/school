const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const carouselImages = document.querySelector('.carousel-images');

let counter = 0;
const size = carouselImages.clientWidth;
const slideWidth = size; // Adjust this value based on your image width and spacing
const slideCount = carouselImages.children.length;
let intervalId = null;

const moveCarousel = () => {
  counter++;
  carouselImages.style.transition = 'transform 0.5s ease-in-out';
  carouselImages.style.transform = `translateX(${-slideWidth * counter}px)`;
};

const startCarousel = () => {
  intervalId = setInterval(() => {
    moveCarousel();
    if (counter === slideCount - 1) {
      setTimeout(() => {
        carouselImages.style.transition = 'none';
        carouselImages.style.transform = 'translateX(0)';
        counter = 0;
      }, 500);
    }
  }, 3000); // Adjust the interval duration (in milliseconds) as needed
};

startCarousel();

prevBtn.addEventListener('click', () => {
  clearInterval(intervalId);
  counter--;
  if (counter < 0) {
    counter = slideCount - 1;
    carouselImages.style.transition = 'none';
    carouselImages.style.transform = `translateX(${-slideWidth * counter}px)`;
  } else {
    carouselImages.style.transition = 'transform 0.5s ease-in-out';
    carouselImages.style.transform = `translateX(${-slideWidth * counter}px)`;
  }
  startCarousel();
});

nextBtn.addEventListener('click', () => {
  clearInterval(intervalId);
  moveCarousel();
  startCarousel();
});
