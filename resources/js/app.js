import.meta.glob(['../images/**', '../fonts/**']);

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'semantic-ui-css/semantic.min.js';

// === ALPINE.JS ===
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// === COMPONENTS AUTO-INIT ===
import './components/init.js';
import './components/main.js';