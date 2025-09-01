const products = document.querySelectorAll('.product');

products.forEach(product => {
  product.addEventListener('mouseenter', () => {
    product.classList.add('hovered');
  });

  product.addEventListener('mouseleave', () => {
    product.classList.remove('hovered');
  });
});