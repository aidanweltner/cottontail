/**
 * External Dependencies
 */
import 'jquery';

$(document).ready(() => {
  // console.log('Hello world');
});

// Hamburger action
var burger = document.querySelector('.hamburger');
var navWrap = document.querySelector('#nav-wrap');
let menuOpen = false;

burger.addEventListener( 'click', () => {
  if ( !menuOpen ){
    burger.classList.add('is-active');
    navWrap.classList.remove('hidden');
    menuOpen = true;
  } else {
    burger.classList.remove('is-active');
    navWrap.classList.add('hidden');
    menuOpen = false;
  }
});