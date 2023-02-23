
$(document).ready(function(){

//Slick slider, initilized at project-slider.php
$('.card-slider').slick({
  slidesToShow:3,
  // autoplay: true,
  slidesToScroll:1,
  dots: false,
  adaptiveHeight: true,
  // this adds an arrow to slick slider
  nextArrow:'<div class="slick-next"><img src="/public/images/arrow-up.svg" alt=""></div>',
  prevArrow:'<div class="slick-prev"><img src="/public/images/arrow-up.svg" alt=""></div>'
})

//progress bar
let processScroll = () => {
	let docElem = document.documentElement, 
		docBody = document.body,
		scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
    	scrollBottom = (docElem['scrollHeight'] || docBody['scrollHeight']) - window.innerHeight - 700,
		scrollPercent = scrollTop / scrollBottom * 100 + '%';
    document.getElementById("progress-bar").style.setProperty("--scrollAmount", scrollPercent);	
}

document.addEventListener('scroll', processScroll);


//Filtering function for work.php page
var filterBtn = $('.filter-btn')
  filterBtn.click(function(){
    const type = $(this).attr('data-project');
    if (type == 'all'){
      $('.card-list-item').show('500');
    }else {
      $('.card-list-item').not('.' + type).hide('500', function(){
      });
      $('.card-list-item').filter('.' + type).show('500');
    }
  })

// add active class on selected tab
filterBtn.click(function(){
  $(this).addClass('filter-btn--active').siblings().removeClass('filter-btn--active');
})

//animate shapes

// animateDiv('.rikki-shape-1');
// animateDiv('.rikki-shape-2');
// animateDiv('.rikki-shape-3');
// animateDiv('.rikki-shape-4');
// animateDiv('.rikki-shape-5');


})


//Hamburger
const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.nav');
const hdr = document.querySelector('.hdr');

// Add event listener
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('hamburger-active');
  nav.classList.toggle('nav-active');
})

import jump from 'jump.module.js';
    let topBtn = document.getElementById("topBtn");
    topBtn.addEventListener('click', () => {
        jump('html');
        console.log('hello');
})


// //Animate shapes
// function makeNewPosition(){
    
//   // Get viewport dimensions (remove the dimension of the div)
//   var h = $(window).height();
//   var w = $(window).width();
  
//   var nh = Math.floor(Math.random() * h);
//   var nw = Math.floor(Math.random() * w);

//   return [nh,nw];    
  
// }

// function animateDiv(myclass){
//   var newq = makeNewPosition();
  
//   $(myclass).animate({ top: newq[0], left: newq[1] }, 5000,   function(){
//     animateDiv(myclass);        
//   });
  
// };