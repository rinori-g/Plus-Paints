/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );
}( jQuery ) );


!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){"use strict";n.r(t);var o;n(1);window.addEventListener("resize",(function(){document.body.classList.add("resize-animation-stopper"),clearTimeout(o),o=setTimeout((function(){document.body.classList.remove("resize-animation-stopper")}),400)}));var r=document.querySelector(".nav-toggle"),i=document.querySelector(".menu-toggle");r.addEventListener("click",(function(e){this.classList.toggle("open"),i.classList.toggle("active"),e.stopPropagation()}))},function(e,t,n){}]);

var dropdown = document.querySelectorAll('.dropdown a');
dropdown.forEach(function(el){
	el.addEventListener('click', function(e) {
		e.target.nextElementSibling.classList.toggle('show');
	});
});

$(function() {
	$(window).on("scroll", function() {
		if($(window).scrollTop() > 300) {
			$(".fx").addClass("activee");
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$(".fx").removeClass("activee");
		}
	});
});


$(document).ready(function(){
	var scroll_pos = 0;
	$(document).scroll(function() {
		scroll_pos = $(this).scrollTop();
		if(scroll_pos > 300) {
			$('.textcolor1').css('color', '#000');
		} else {
			$('.textcolor1').css('color', '#fff');
		}
	});
});


jQuery(function($) {

	var newLogo = './assets/images/logo-slogan.png';
	var oldLogo = $('.nav__logo .logo2').attr('src');

	$(window).on('load scroll', function() {
		var y = $(this).scrollTop();
		if ( y >= 300 &&  $(window).width() >= 600) {
			$('.nav__logo .logo2').attr('src',newLogo);
		}else if ($(window).width() < 600){
			$('.nav__logo .logo2').attr('src',newLogo);
		}
		else {
			$('.nav__logo .logo2').attr('src',oldLogo);
		}
	});

});