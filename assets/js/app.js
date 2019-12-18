/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

const btnPopup1 = document.querySelector('#btnPopup1');
const overlay1 = document.querySelector('#overlay1');
const btnClose1 = document.querySelector('#btnClose1');
btnPopup1.addEventListener('click', function () {
  overlay1.style.display = ('block');
  
});
btnClose1.addEventListener('click', function () {
  overlay1.style.display = ('none');
});
