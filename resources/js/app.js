require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var rellax = new Rellax('.rellax', {
  speed: 4,
  center: true,
  round: true,
  vertical: true,
  horizontal: false
});
