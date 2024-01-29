/**
 * theme.js
 * @version 0.6.8
 * Main functions of theme
 */

jQuery(document).ready(function ($) {
  'use strict';

  // iPad and iPod detection	
  var isiPad = function () {
    return (navigator.platform.indexOf("iPad") != -1);
  };

  var isiPhone = function () {
    return (
      (navigator.platform.indexOf("iPhone") != -1) ||
      (navigator.platform.indexOf("iPod") != -1)
    );
  };

  //
  // burgerMenu();
  $('.js-colorlib-nav-toggle').on('click', function (event) {
    event.preventDefault();
    if ($('body').hasClass('menu-show')) {
      $('body').removeClass('menu-show');
      $('#colorlib-main-nav > .js-colorlib-nav-toggle').removeClass('show');
    } else {
      $('body').addClass('menu-show');
      setTimeout(function () {
        $('#colorlib-main-nav > .js-colorlib-nav-toggle').addClass('show');
      }, 900);
    }
  })

  let inDisplay = false;
  $(".menu-item-has-children").click(function () {
    let menu = $(this);
    if (inDisplay) {
      menu.find("ul").fadeOut();
      inDisplay = false;
    } else {
      menu.find("ul").fadeIn();
      inDisplay = true;
    }
  });

  //
  // fullHeight();
  $('.js-fullheight').css('height', $(window).height());

  $(window).resize(function () {
    $('.js-fullheight').css('height', $(window).height());
  });

  const searchButton = document.getElementById("search-button");
  const searchContainer = document.getElementById("search-container");
  const rbpjMainNav = document.getElementById("rbpj-mainnav");
  
  searchButton.addEventListener("click", () => {
    searchContainer.classList.toggle("d-none");
    rbpjMainNav.classList.toggle("pt-8");
  });

});