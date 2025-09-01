window.addEventListener('DOMContentLoaded', function() {
    var carousel = document.getElementById('carousel');
    var slides = carousel.getElementsByClassName('slide');
    var currentIndex = 0;
    var slideInterval = setInterval(nextSlide, 3000); // Cambia de imagen cada 3 segundos
  
    function nextSlide() {
      slides[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % slides.length;
      slides[currentIndex].classList.add('active');
    }
    var prevBtn = document.getElementById('prevBtn');
    var nextBtn = document.getElementById('nextBtn');
  
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
  
    function prevSlide() {
      slides[currentIndex].classList.remove('active');
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      slides[currentIndex].classList.add('active');
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, 2000);
    }
});