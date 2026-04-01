$(document).ready(function () {
  $(".fa-bars").click(function () {
    $(this).toggleClass("fa-times");
    $(".navbar").toggleClass("nav-toggle");
  });

  $(window).on("load scroll", function () {
    $(".fa-bars").removeClass("fa-times");
    $(".navbar").removeClass("nav-toggle");

    if ($(window).scrollTop() > 30) {
      $(".header").css({
        background: " rgb(4, 37, 145)",
        "box-shadow": "1px  2px 3px rgb(71, 71, 71) ",
      });
    } else {
      $(".header").css({ background: "none", "box-shadow": "none" });
    }
  });

  $(".accordion-header").click(function () {
    $(".accordiion  .accordion-body").slideUp();
    $(this).next(".accordion-body").slideDown();
    $(".accordion .accordion-header span").text("+");
    $(this).children("span").text("-");
  });
});
