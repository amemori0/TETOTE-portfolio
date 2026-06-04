import Swiper from 'swiper';
import { Autoplay, Navigation} from 'swiper/modules';
import 'swiper/css';

const staffSwiper = new Swiper('.p-top-staff__swiper', {
  modules: [Autoplay, Navigation],
  speed: 1000,
  effect: "slide",
  allowTouchMove: true,
  loop: false,

  initialSlide: 1,//二枚目の画像から

  autoplay: {
    delay: 3000,
    stopOnLastSlide: false,
    disableOnInteraction: true,
    reverseDirection: false,
  },
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 43,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "bullets",
  },
  navigation: {
    prevEl: ".swiper-button-prev",
    nextEl: ".swiper-button-next",
  },
});