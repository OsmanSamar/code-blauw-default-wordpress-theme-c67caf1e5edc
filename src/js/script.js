import "babel-polyfill";
import "bootstrap";

// Styling
import "../scss/style.scss";


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
      init: function () {},
      slideChangeTransitionEnd: function () {},
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
      init: function () {},
      slideChangeTransitionEnd: function () {},
    },
  });
});

//Navbar on Scroll

window.addEventListener("scroll", function () {
  let navbar = document.querySelector(".navbar");
  let logo = document.querySelector(".navbar-brand img"); // Select the logo image
  let hamburgerSpans = document.querySelectorAll(".hamburger span");

  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
    logo.src = logo.getAttribute("data-scrolled-logo"); // Set new logo when scrolled

    // Change the hamburger span color on scroll
    hamburgerSpans.forEach((span) => {
      span.style.backgroundColor = "#f29401";
    });
  } else {
    navbar.classList.remove("scrolled");
    logo.src = logo.getAttribute("data-default-logo"); // Revert to original logo

     // Revert the hamburger span color
    hamburgerSpans.forEach((span) => {
      span.style.backgroundColor = ""; // Reset to default
    });

  }
});


