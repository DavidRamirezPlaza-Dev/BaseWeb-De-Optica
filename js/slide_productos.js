window.addEventListener('DOMContentLoaded', function() {
    var carousel = document.getElementById('carousel2');
    var slides = carousel.getElementsByClassName('slide2');
    var currentIndex = 0;
    var slideInterval = setInterval(nextSlide, 3000); // Cambia de imagen cada 3 segundos
  
    function nextSlide() {
      slides[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % slides.length;
      slides[currentIndex].classList.add('active');
    }
});