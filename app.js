/*Text Animation CSS and JavaScript

.box{
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
  }
  
  .box.show{
    opacity: 1;
    transform: translateY(0);
  }
*/

const contents = document.querySelectorAll('.box');

window.addEventListener('scroll', checkBoxes);

function checkBoxes() {
    const triggerBottom = window.innerHeight / 5 * 4;

    contents.forEach((content) => {
        const contentTop = content.getBoundingClientRect().top;

        if (contentTop < triggerBottom) {
            content.classList.add('show');
        } else {
            content.classList.remove('show');
        }
    });
}

/*Active Header */

const header = document.querySelector('.header');

window.onscroll = function(){
    var top = window.scrollY;
    console.log(top);
    if (top >= 50){
        header.classList.add('active')
    }else{
        header.classList.remove('active');
    }
}
/*Carousel Script */
let prev = document.querySelector('.prev');
let next = document.querySelector('.next');
let box = document.querySelector('.image-slider-box');

let degrees = 0;

prev.addEventListener('click', function () {
    degrees += 45;

    box.style.transform = `perspective(1000px) rotateY(${degrees}deg)`;
})

next.addEventListener('click', function () {
    degrees -= 45;

    box.style.transform = `perspective(1000px) rotateY(${degrees}deg)`;
})

/*MODAL CALL */
const openBtn = document.getElementById("openModal");
const closeBtn = document.getElementById("closeModal");
const modal = document.getElementById("modal");

openBtn.addEventListener("click", () => {
    modal.classList.add("open");
});

closeBtn.addEventListener("click", () => {
    modal.classList.remove("open");
});