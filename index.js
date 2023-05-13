document.addEventListener("DOMContentLoaded", function () {
    var menuToggle = document.querySelector(".menu-toggle");
  
    // Mobile Nav Toggle
    if (menuToggle) {
      menuToggle.addEventListener("click", function () {
        var nav = document.querySelector(".nav");
        nav.classList.toggle("mobile-nav");
        this.classList.toggle("is-active");
      });
    }
});