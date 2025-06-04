import "babel-polyfill";
import "bootstrap";

// Styling
import "../scss/style.scss";

// Fontawesome
import { dom, library } from "@fortawesome/fontawesome-svg-core";
import {
  faFacebookF,
  faTwitter,
  faInstagram,
  faLinkedinIn,
} from "@fortawesome/free-brands-svg-icons";
library.add(faFacebookF, faTwitter, faInstagram, faLinkedinIn);
dom.watch();

// General
jQuery(document).ready(function ($) {
  if ($(".login.wp-core-ui").length) {
    $("#user_login").attr("placeholder", "Gebruikersnaam of e-mailadres");
    $("#user_pass").attr("placeholder", "Wachtwoord");
  }
});


document.querySelectorAll(".werken-slider").forEach((x) => {
  let swiper = new Swiper(x.querySelector(".werk-swiper"), {
    slidesPerView: 1,
    grabCursor: true,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: x.querySelector(".swiper-button-next"),
      prevEl: x.querySelector(".swiper-button-prev"),
    },
    pagination: {
      el: x.querySelector(".swiper-pagination"),
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1280: {
        slidesPerView: 3,
      },
      1440: {
        slidesPerView: 4,
      },
    },
    on: {
      init: function () {
        
      },
      slideChangeTransitionEnd: function () {
        
      },
    },
  });
});




document.querySelectorAll(".partner-slider").forEach((x) => {
  let swiper = new Swiper(x.querySelector(".partner-swiper"), {
    slidesPerView: 2,
    grabCursor: true,
     centeredSlides: true,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: x.querySelector(".swiper-button-next"),
      prevEl: x.querySelector(".swiper-button-prev"),
    },
    pagination: {
      el: x.querySelector(".swiper-pagination"),
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1280: {
        slidesPerView: 5,
      },
      1440: {
        slidesPerView: 7,
      },
    },
    on: {
      init: function () {
       
      },
      slideChangeTransitionEnd: function () {
        
      },
    },
  });
});

