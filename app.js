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

window.onscroll = function () {
    var top = window.scrollY;
    console.log(top);
    if (top >= 50) {
        header.classList.add('active')
    } else {
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

/* SMTP SCRIPT*/
const form = document.querySelector("form");
const fullName = document.getElementById("name");
const email = document.getElementById("email");
const mess = document.getElementById("message");

function sendEmail() {
    const bodyMessage = `Full Name: ${fullName.value}<br> Email: ${email.value}<br> Message: ${mess.value}`;

    Email.send({
        Host: "smtp.elasticemail.com",
        Username: "manosgrammos9@gmail.com",
        Password: "8F08C80BDF25D3DB73F1355B91C9EDA878DA",
        To: 'manosgrammos9@gmail.com',
        From: "manosgrammos9@gmail.com",
        Subject: "Trip Information",
        Body: bodyMessage
    }).then(
        message => {
            if (message == "OK") {
                Swal.fire({
                    title: "Success",
                    text: "Message sent successfully!",
                    icon: "success"
                });
            }
        }
    );
}

function checkInputs() {
    const items = document.querySelectorAll(".item");

    for (const item of items) {
        if (item.value == "") {
            item.classList.add("error");
            item.parentElement.classList.add("error");
        }

        item.addEventListener("keyup", () => {
            if (item.value != "") {
                item.classList.remove("error");
                item.parentElement.classList.remove("error");
            }
            else {
                item.classList.add("error");
                item.parentElement.classList.add("error");
            }
        });

    }
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    checkInputs();

    /*sendEmail();*/
});
