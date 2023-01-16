import '../styles/style.scss';
import anime from 'animejs/lib/anime.es.js';

let text = document.getElementById('about');

anime({
    targets: text,
    fontSize: '4rem', // -> from '28px' to '100%',
    easing: 'easeInOutQuad',
    direction: 'alternate',
    loop: false
});

