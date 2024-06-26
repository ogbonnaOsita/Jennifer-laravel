// NAVBAR SHADOW
window.addEventListener("scroll", function () {
  var navbar = document.getElementById("navbar");
  if (window.scrollY > 3) {
    navbar.classList.add("shadow-md");
  } else {
    navbar.classList.remove("shadow-md");
  }
});

const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  keyboard: true,
  mousewheel: true,

  breakpoints: {
    // when window width is >= 640px (sm)
    640: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px (md)
    1024: {
      slidesPerView: 3,
    },
  },
});

// Character Limit
document.addEventListener("DOMContentLoaded", function () {
  const descriptions = document.querySelectorAll(".appearance-description");
  const maxLength = 350; // Set your character limit here

  descriptions.forEach(function (description) {
    const originalText = description.textContent;

    if (originalText.length > maxLength) {
      description.textContent = originalText.substring(0, maxLength) + "...";
    }
  });
});

// Display the current year in footer
document.addEventListener("DOMContentLoaded", function () {
  const currentYear = new Date().getFullYear();
  document.getElementById("current-year").textContent = currentYear;
});

// Hamburger Menu
document.addEventListener("DOMContentLoaded", function () {
  const menuButtons = document.querySelectorAll(".menuButton");
  const menu = document.getElementById("menu");

  menuButtons.forEach((menuButton) => {
    menuButton.addEventListener("click", function () {
      menu.classList.toggle("translate-x-full");
    });
  });
});

// Close menu when clicking outside of it
document.addEventListener("click", function (event) {
  const menu = document.getElementById("menu");
  const menuButton = document.querySelector(".menuButton");

  if (!menu.contains(event.target) && !menuButton.contains(event.target)) {
    if (!menu.classList.contains("translate-x-full")) {
      menu.classList.add("translate-x-full");
      menu.classList.remove("translate-x-0");
    }
  }
});

// Preloader - Hide preloader on windows load
window.addEventListener("load", function () {
  const preloader = document.getElementById("preloader");
  preloader.classList.add("hidden");
});
