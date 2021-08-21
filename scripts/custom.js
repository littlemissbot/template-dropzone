$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $(".navbar").addClass("bg-white");
      $(".navbar").addClass("shadow-lg");
      $(".navbar").removeClass("bg-transparent");
      $(".navbar-brand").addClass("text-primary");
    } else {
      $(".navbar").addClass("bg-transparent");
      $(".navbar").removeClass("bg-white");
      $(".navbar").removeClass("shadow-lg");
      $(".navbar-brand").removeClass("text-primary");
    }
  });
});