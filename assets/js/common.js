const spring_block = document.querySelector(".spring-block");
const spring_bg = document.querySelector(".spring-bg");

spring_block?.addEventListener("mouseover", changeOpacity);
spring_block?.addEventListener("mouseleave", resetOpacity);

function changeOpacity() {
  spring_bg.style.opacity = "1";
}

function resetOpacity() {
  spring_bg.style.opacity = "0.6";
}

$(document).ready(function () {
  // $(".mv-sec .card").length && $(".mv-sec .card").matchHeight();
  // $(".mv-sec .card .card-body").length && $(".mv-sec .card .card-body").matchHeight();

  $(".menu__services").mouseenter(function () {
    $(".menu__services--hover").removeClass("d-none");
  });

  $(".menu__services, .menu__services--hover").mouseleave(function () {
    setTimeout(function () {
      if (!$(".menu__services:hover").length && !$(".menu__services--hover:hover").length) {
        $(".menu__services--hover").addClass("d-none");
      }
    }, 50);
  });

  $(".menu__services2").mouseenter(function () {
    $(".menu__services2--hover").removeClass("d-none");
  });

  $(".menu__services2, .menu__services2--hover").mouseleave(function () {
    setTimeout(function () {
      if (!$(".menu__services2:hover").length && !$(".menu__services2--hover:hover").length) {
        $(".menu__services2--hover").addClass("d-none");
      }
    }, 50);
  });

  $(".menu__services3").mouseenter(function () {
    $(".menu__services3--hover").removeClass("d-none");
  });

  $(".menu__services3, .menu__services3--hover").mouseleave(function () {
    setTimeout(function () {
      if (!$(".menu__services3:hover").length && !$(".menu__services3--hover:hover").length) {
        $(".menu__services3--hover").addClass("d-none");
      }
    }, 50);
  });

  $(".menu__services6").mouseenter(function () {
    $(".menu__services6--hover").removeClass("d-none");
  });

  $(".menu__services6, .menu__services6--hover").mouseleave(function () {
    setTimeout(function () {
      if (!$(".menu__services6:hover").length && !$(".menu__services6--hover:hover").length) {
        $(".menu__services6--hover").addClass("d-none");
      }
    }, 50);
  });
});

document.getElementById("page-top")?.addEventListener("click", () => {
  window.scrollTo(0, 0);
});

//network solution
$(".flex-box-sec .card-header ").length && $(".flex-box-sec .card-header").matchHeight();

//goverment section
$(".card-block-sec .card-header ").length && $(".card-block-sec .card-header").matchHeight();
$(".flex-box-sec .card-header").length && $(".flex-box-sec .card-header").matchHeight();
$(".flex-box-sec .card-header .ttl").length && $(".flex-box-sec .card-header .ttl").matchHeight();

// software solution
$(".flex-box-sec .card-body .body-txt").length && $(".flex-box-sec .card-body .body-txt").matchHeight();
$(".flex-box-sec .card-body p").length && $(".flex-box-sec .card-body p").matchHeight();

//Recruitment information
$(".sec-recruit .card-para").length && $(".sec-recruit .card-para").matchHeight();
$(".sec-recruit .card-ttl").length && $(".sec-recruit .card-ttl").matchHeight();
