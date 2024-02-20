/**
 * theme.js
 * @version 0.6.10
 * Main functions of theme
 */

'use strict';

let inDisplay = false;

// iPad and iPod detection	
let isiPad = function () {
  return (navigator.platform.indexOf("iPad") != -1);
};

let isiPhone = function () {
  return (
    (navigator.platform.indexOf("iPhone") != -1) ||
    (navigator.platform.indexOf("iPod") != -1)
  );
};

// Seleccionar el elemento con el ID 'colorlib-main-nav'
let colorlibMainNav = document.getElementById('colorlib-main-nav');
let colorlibNavToggleInsideMainNav = colorlibMainNav.querySelector('.js-colorlib-nav-toggle');

const burger = document.getElementById("burger");
burger.addEventListener('click', (event) => {
  console.log("Menu Open");
  event.preventDefault();
  let body = document.body;
  body.classList.add('menu-show');
  setTimeout(function () {
    colorlibNavToggleInsideMainNav.classList.add('show');
  }, 900);
});

const burgerClose = document.getElementById("burger-close");
burgerClose.addEventListener('click', (event) => {
  console.log("Menu Close");
  event.preventDefault();
  let body = document.body;
  body.classList.remove('menu-show');
  colorlibNavToggleInsideMainNav.classList.remove('show');
});

// Seleccionar todos los elementos con la clase 'menu-item-has-children'
let menuItems = document.querySelectorAll('.menu-item-has-children');

// Iterar sobre los elementos seleccionados y agregar un event listener para el evento de clic
menuItems.forEach(function (menuItem) {
  menuItem.addEventListener('click', function () {
    // Obtener el elemento de menú actual
    let menu = menuItem;

    // Obtener el elemento 'ul' dentro del menú actual
    let menuUl = menu.querySelector('ul');

    // Verificar el estado de visualización
    if (inDisplay) {
      // Si está en visualización, ocultar el menú 'ul'
      menuUl.style.display = 'none';
      inDisplay = false;
    } else {
      // Si no está en visualización, mostrar el menú 'ul'
      menuUl.style.display = 'block'; // Puedes cambiar 'block' por 'flex' u otra propiedad según tus necesidades
      inDisplay = true;
    }
  });
});

// Establecer la altura de los elementos con la clase 'js-fullheight' al tamaño de la ventana
document.querySelectorAll('.js-fullheight').forEach(function (element) {
  element.style.height = window.innerHeight + 'px';
});

// Agregar un event listener para el evento de cambio de tamaño de la ventana
window.addEventListener('resize', function () {
  // Actualizar la altura de los elementos con la clase 'js-fullheight' al nuevo tamaño de la ventana
  document.querySelectorAll('.js-fullheight').forEach(function (element) {
    element.style.height = window.innerHeight + 'px';
  });
});

const searchButton = document.getElementById("search-button");
const searchContainer = document.getElementById("search-container");
const rbpjMainNav = document.getElementById("rbpj-mainnav");

searchButton.addEventListener("click", () => {
  searchContainer.classList.toggle("d-none");
  rbpjMainNav.classList.toggle("pt-8");
});