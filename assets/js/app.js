import '../styles/style.scss';
import '../images/html_css.png';
import '../images/js.png';
import '../images/php.png';
import '../images/jquery.png';
import '../images/sql.png';
import '../images/bootstrap.png';
import '../images/ajax.png';
import '../images/composer.png';
import '../images/github.png';
import '../images/typescript.png';
import '../images/linux.png';
import '../images/sass.png';
import '../images/webpack.png';
import '../images/twig.png';
import '../images/redbean.png';
import '../images/symfony.png';
import '../images/doctrine.png';
import '../images/react.png';
import '../images/electron.png';
import '../images/react_native.png';
import '../images/contact.jpg';
import '../images/project_factice.jpg';

import anime from 'animejs/lib/anime.es.js';



const close = document.getElementById('close');
const message = document.querySelector('.message-error, .message-success');

if (close) {
    function closeMessage() {
        close.style.display = 'none';
        message.remove();
    }
    // Closing manually and by timeout.
    close.addEventListener("click", () => closeMessage());
    setTimeout(() => closeMessage(), 6000);
}
let text = document.getElementById('about');
let contain = document.getElementById('#contact');

let name = document.getElementById('name');
let email = document.getElementById('mail');
let btnValidate = document.getElementById('btn-contact');

if (btnValidate) {
    contain.style.color = "red";
    contain.style.textAlign = "center";
    contain.style.padding = "2rem";
    btnValidate.addEventListener("click", (e)=> {
        // Checking fields are not empty.
        if (email.value === "" || name.value === "" ) {
            e.preventDefault();
            contain.innerHTML = "Veuillez remplir tout les champs";
            deleteMessage(contain);
        }
        // Checking fields length.
        else if(
            (email.value.length <= 5 || email.value.length >= 70) ||
            (name.value.length <= 2 || name.value.length >= 150)
        ) {
            e.preventDefault();
            contain.innerHTML = "Votre email doit comporter entre 5 et 70 caractères et votre prénom doit être compris entre 2 et 150 caractères";
            deleteMessage(contain);
        }
    })
}

const swiper3 = new Swiper(".s3", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});



// time message error
function deleteMessage(contain) {
    let timeout = setTimeout(function () {
        contain.innerHTML = "";
        clearTimeout(timeout);
    }, 6000);
}

anime({
    targets: text,
    fontSize: '4rem', // -> from '28px' to '100%',
    easing: 'easeInOutQuad',
    direction: 'alternate',
    loop: false
});



