

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
