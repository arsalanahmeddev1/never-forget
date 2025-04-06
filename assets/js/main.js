// for lazy load in images
const images = document.querySelectorAll('img');
images.forEach(img => {
  img.setAttribute('loading', 'lazy');
});

// mobile menu
let navs = document.querySelector('.primary-navs');
let menuIcon = document.querySelectorAll('.menu-toggle');
menuIcon.forEach(function (e) {
  e.addEventListener('click', function () {
    navs.classList.toggle('active');
  });
});
$('.testimonials-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: '.testimonials-arrows .arrow-left',
  nextArrow: '.testimonials-arrows .arrow-right',
  // responsive: [
  //   {
  //     breakpoint: 1024,
  //     settings: {
  //       slidesToShow: 3,
  //       slidesToScroll: 3,
  //       infinite: true,
  //       dots: true
  //     }
  //   },
  //   {
  //     breakpoint: 600,
  //     settings: {
  //       slidesToShow: 2,
  //       slidesToScroll: 2  
  //     }
  //   },
  //   {
  //     breakpoint: 480,
  //     settings: {
  //       slidesToShow: 1,
  //       slidesToScroll: 1
  //     }
  //   }
  //   // You can unslick at a given breakpoint now by adding:
  //   // settings: "unslick"
  //   // instead of a settings object
  // ]
});

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  prevArrow: '.solution-arrows .arrow-left',
  nextArrow: '.solution-arrows .arrow-right',
});
document.addEventListener('DOMContentLoaded', () => {
  const truncatedText = document.getElementById('truncated-text');
  const fullText = document.getElementById('full-text');
  const readMoreLink = document.getElementById('read-more-link');
  if (readMoreLink) {


    readMoreLink.addEventListener('click', () => {
      if (fullText.classList.contains('hidden')) {
        fullText.classList.remove('hidden');
        truncatedText.classList.add('hidden');
        readMoreLink.textContent = 'Read Less';
      } else {
        fullText.classList.add('hidden');
        truncatedText.classList.remove('hidden');
        readMoreLink.textContent = 'Read More';
      }
    });
  }
});

