$(document).ready(function(){

//Slick slider, initilized at project-slider.php
$('.card-slider').slick({
  slidesToShow:3,
  slidesToScroll:1,
  dots: false,
  adaptiveHeight: true,
  // this adds an arrow to slick slider
  nextArrow:'<div class="slick-next"><img src="/public/images/arrow-up.svg" alt=""></div>',
  prevArrow:'<div class="slick-prev"><img src="/public/images/arrow-up.svg" alt=""></div>'
})

//Projects page rogress bar
if(document.querySelector('.progress-bar')) {
  let processScroll = () => {
    let docElem = document.documentElement, 
      docBody = document.body,
      scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
        scrollBottom = (docElem['scrollHeight'] || docBody['scrollHeight']) - window.innerHeight - 700,
      scrollPercent = scrollTop / scrollBottom * 100 + '%';
      document.querySelector('.progress-bar').style.setProperty('--scrollAmount', scrollPercent);	
  }
  document.addEventListener('scroll', processScroll);
}


const URL = window.location.href;

if(URL.includes('project')){
  //Scroll to top button
  let topBtn = document.querySelector('#topBtn');

  window.onscroll = () => {
    showTopButton()
    if((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 600) {
      // you're at the bottom of the page
      topBtn.style.display = "none";
  }
  };

  function showTopButton() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      topBtn.style.display = "block";
    }
    else {
      topBtn.style.display = "none";
    }
  }
}

var cardItem = document.querySelectorAll('.card-list-item');

//Filtering function for work.php page
var filterBtn = $('.filter-btn')
filterBtn.click(function(){
  const type = $(this).attr('data-project');
  if (type == 'all'){
    $('.card-list-item').removeClass('animate__animated animate__bounceOut').addClass('animate__animated animate__bounceIn').show('fast');
  }else {
    $('.card-list-item').not('.' + type).removeClass('animate__animated animate__bounceIn').addClass('animate__animated animate__bounceOut').hide('fast');
    $('.card-list-item').filter('.' + type).removeClass('animate__animated animate__bounceOut').addClass('animate__animated animate__bounceIn').show('fast');
  }
})

// add active class on selected tab
filterBtn.click(function(){
  $(this).addClass('filter-btn--active').siblings().removeClass('filter-btn--active');
})

})

//Hamburger menu
const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.nav');
const hdr = document.querySelector('.hdr');

// Add event listener
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('hamburger-active');
  nav.classList.toggle('nav-active');
})
