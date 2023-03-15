let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = ()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

var swiper = new Swiper(".home-slider", {
  loop: true,
  effect:"fade",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".review-slider", {
  loop:true,
  spaceBetween: 20,
  grabCursor: true,
  autoHeight:true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

let loadMore = document.querySelector('.packages .load-more .btn');
console.log(loadMore);
currentItem = 6;

loadMore.onclick = ()=>{
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  console.log(boxes)
  for(let i = currentItem;i < currentItem + 3; i++){
    console.log(boxes[i],i)
    boxes[i].style.display = 'inline-block';
  }
  currentItem += 3;
  console.log(currentItem);
  if(currentItem >= boxes.length){
    loadMore.style.display = 'none';
  }
}
