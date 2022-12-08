
$(document).ready(function(){

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
  $(this).addClass('active').siblings().removeClass('active');
})

})

var menu = document.querySelector('.menu')
var nav_items = document.querySelector('.nav-items')
var hamburger = document.querySelector('.hamburger')

// Add event listener
hamburger.addEventListener("click", openCloseNav)

// Create burger opening and closing
function openCloseNav() {
    if(nav_items.classList.contains('nav-active')){
        nav_items.classList.remove('nav-active')
        hamburger.classList.remove('burger-active')
    } else{
        nav_items.classList.add('nav-active')
        hamburger.classList.add('burger-active')
    }
}

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