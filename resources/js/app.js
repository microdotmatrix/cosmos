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

const swiper = new Swiper(".sw", {
	containerModifierClass: 'sw-',
	slideActiveClass: 'sw-slide-active',
	slideBlankClass: 'sw-slide-invisible-blank',
	slideClass: 'sw-slide',
	slideDuplicateClass: 'sw-slide-duplicate',
	slideDuplicateNextClass: 'sw-slide-duplicate-next',
	slideDuplicatePrevClass: 'sw-slide-duplicate-prev',
	slideDuplicateActiveClass: 'sw-slide-duplicate-active',
	slideNextClass: 'sw-slide-next',
	slidePrevClass: 'sw-slide-prev',
	slideVisibleClass: 'sw-slide-visible',
	speed: 1200,
	parallax: true,
	loop: true,
	autoplay: {
		delay: 6000,
	},
	pagination: {
		el: ".sw-pagination",
		clickable: true
	},
	navigation: {
		nextEl: ".sw-button-next",
		prevEl: ".sw-button-prev"
	},
	effect: 'creative',
	creativeEffect: {
		prev: {
			origin: "left center",
			translate: ["-0.5%", "1%", -200],
			scale: 0.98,
		},
		next: {
			origin: "left center",
			translate: ["10%", "1%", -50],
			scale: 1.1,
			opacity: 0.5,
		 },

	},
});


// GSAP Animations
var tween = gsap.from(".gs-01", {
	duration: 2,
	delay: 1.2,
	x: 20,
	scale: 1.08,
	transformOrigin: "right top",
	opacity: 0,
	ease: "sine.out"
 });
