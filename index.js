document.addEventListener("DOMContentLoaded", function () {
  var menuToggle = document.querySelector(".menu-toggle");
  var navItems = document.querySelectorAll(".nav-item");

  // Mobile Nav Toggle
  if (menuToggle) {
    menuToggle.addEventListener("click", function () {
      var nav = document.querySelector(".nav");
      nav.classList.toggle("mobile-nav");
      this.classList.toggle("is-active");
    });

    navItems.forEach(function (navItem) {
      navItem.addEventListener("click", function () {
        var nav = document.querySelector(".nav");
        nav.classList.toggle("mobile-nav");
        menuToggle.classList.toggle("is-active");
      });
    });
  }
});

// Animations
$(document).ready(function() {
  function isElementInView(elem) {
    var top_of_element = $(elem).offset().top;
    var bottom_of_element = $(elem).offset().top + $(elem).outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();

    return (bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element);
  }

  function checkSlide() {
    $('.slide-up, .slide-left, .slide-right').each(function() {
      if (isElementInView($(this))) {
        $(this).addClass('show');
      }
    });
  }

  $(window).on('scroll', checkSlide); // Check on scroll
  checkSlide(); // Check on page load

  // Portfolio Modals
  const numModals = 4;
  let $open = [], $close = [], $modal = [];

  for (let i = 1; i <= numModals; i++) {
    $open[i] = $('[data-open-modal-' + i + ']');
    $close[i] = $('[data-close-modal-' + i + ']');
    $modal[i] = $('[data-modal-' + i + ']');
  }

  for (let i = 1; i <= numModals; i++) {
    $open[i].on("click", function() {
      $modal[i][0].showModal();
    });

    $close[i].on("click", function() {
      $modal[i][0].close();
  });
}
});



