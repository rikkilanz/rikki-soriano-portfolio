
$(document).ready(function(){

//Slick slider


$('.card-slider').slick({
  slidesToShow:3,
  // autoplay: true,
  slidesToScroll:1,
  dots: false,
  // adaptiveHeight: true
})


//Filter Work

var filterBtn = $('.filter-btn')

  filterBtn.click(function(){
    const type = $(this).attr('data-project');
    if (type == 'all'){
      $('.card-list-item').show('1000');
    }else {
      $('.card-list-item').not('.' + type).hide('1000', function(){
      });
      $('.card-list-item').filter('.' + type).show('1000');
    }
  })

// add active class on selected tab
filterBtn.click(function(){
  $(this).addClass('filter-btn--active').siblings().removeClass('filter-btn--active');
})

})

const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.nav');
const hdr = document.querySelector('.hdr');

// Add event listener
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('hamburger-active');
  nav.classList.toggle('nav-active');
})

// let topBtn = document.getElementsByClassName("btn--top");

// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     topBtn.style.display = "block";
//   } else {
//     topBtn.style.display = "none";
//   }
// }

// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }