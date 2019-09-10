import React from 'react'
import { render } from 'react-dom'
import $ from "jquery";

window.$ = $;

$(function() {
  var header = $("nav");
/*
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        header.addClass("sticky");
    } else {
        header.removeClass("sticky");
    }
  });
*/
  $('.nav-trigger').click(function() {
    $('body').toggleClass('nav-active');
  });

  $('.grid-item').click(function () {
    $(this).toggleClass("grid-item--active");
  })

});
