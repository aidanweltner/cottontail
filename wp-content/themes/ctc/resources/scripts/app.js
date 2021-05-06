/**
 * External Dependencies
 */
import 'jquery';

$(document).ready(() => {
  // console.log('Hello world');
});

// Hamburger action
var burger = document.querySelector('.hamburger');
var servicesBtn = document.querySelector('#services-menu');
var navWrap = document.querySelector('#nav-wrap');
var menuBg = document.querySelector('#menu-bg');
var services = document.querySelector('#services-list');
let menuOpen = false;
let servicesOpen = false;

burger.addEventListener( 'click', () => {
  if ( !menuOpen ){
    burger.classList.add('is-active');
    navWrap.classList.remove('hidden');
    navWrap.classList.add('flex');
    menuBg.classList.remove('scale-x-0');
    menuBg.classList.add('scale-x-100');
    menuOpen = true;
  } else {
    burger.classList.remove('is-active');
    navWrap.classList.add('hidden');
    navWrap.classList.remove('flex');
    menuBg.classList.add('scale-x-0');
    menuBg.classList.remove('scale-x-100');
    menuOpen = false;
  }
});

servicesBtn.addEventListener( 'click', () => {
  if ( !servicesOpen ){
    services.classList.remove('closed');
    services.classList.add('open');
    servicesBtn.classList.remove('closed');
    servicesBtn.classList.add('open');
    servicesOpen = true;
  } else {
    services.classList.add('closed');
    services.classList.remove('open');
    servicesBtn.classList.add('closed');
    servicesBtn.classList.remove('open');
    servicesOpen = false;
  }
});