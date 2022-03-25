require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

// Import GSAP
import { gsap } from 'gsap';

// Import Luge (Transition, Loading and Parallax FX)
// import { luge } from '@waaark/luge';

import { jarallax } from "jarallax";

jarallax(document.querySelectorAll(".jarallax"));

// import Swiper JS
import Swiper from 'swiper/bundle';
// import Swiper and modules styles
// import 'swiper/css/bundle';
import { flip } from 'lodash';

const swiper = new Swiper(".swiper", {
	speed: 800,
	parallax: true,
	loop: true,
	autoplay: {
		delay: 8000,
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	}
});
