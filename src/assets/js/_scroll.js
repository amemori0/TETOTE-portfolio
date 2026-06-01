import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const header = document.querySelector('.p-header');
const mv = document.querySelector('.p-mv');

ScrollTrigger.create({
  trigger: mv,
  start: 'bottom top', // FVの下端が画面上部を超えたら発火
  onEnter: () => {
    header.classList.add('js-scrolled');
  },
  onLeaveBack: () => {
    header.classList.remove('js-scrolled');
  },
});