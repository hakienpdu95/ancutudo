import.meta.glob(['../images/**', '../fonts/**']);

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'fomantic-ui-css/semantic.min.js';

// === ALPINE.JS ===
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
  $('.ui.dropdown').dropdown();
  $('.ui.accordion').accordion();
  $('.ui.checkbox').checkbox();
  $('.ui.modal').modal();
  $('.ui.tab').tab();
  $('.ui.popup').popup();
});

// === COMPONENTS AUTO-INIT ===
import './components/init.js';
import './components/main.js';