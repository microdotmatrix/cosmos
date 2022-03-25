require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

// Import GSAP
import { gsap } from 'gsap';

// Import Luge (Transition, Loading and Parallax FX)
import { luge } from '@waaark/luge';

// import Swiper JS
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/scss';
import 'swiper/scss/navigation';
import 'swiper/scss/pagination';

// init Swiper:
const swiper = new Swiper('.swiper', {
	// configure Swiper to use modules
	direction: 'vertical',
	loop: true,

	pagination: {
		el: '.swiper-pagination',
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});
