(function ($) {
  "use strict";
  $(".mobile-toggle").click(function () {
    if ($(".nav-menus").hasClass("open")) {
      $("#right_side_bar").removeClass("show");
      $(".form-control-plaintext").removeClass("open");
    }
    $(".nav-menus").toggleClass("open");
  });
  $(".mobile-search").click(function () {
    $(".form-control-plaintext").toggleClass("open");
  });
  $(".bookmark-search").click(function () {
    $(".form-control-search").toggleClass("open");
  });
  $(".filter-toggle").click(function () {
    $(".product-sidebar").toggleClass("open");
  });
  $(".toggle-data").click(function () {
    $(".product-wrapper").toggleClass("sidebaron");
  });
  $(".form-control-plaintext").keyup(function (e) {
    if (e.target.value) {
      $("body").addClass("offcanvas");
    } else {
      $("body").removeClass("offcanvas");
    }
  });
  $(".form-control-search").keyup(function (e) {
    if (e.target.value) {
      $(".page-wrapper").addClass("offcanvas-bookmark");
    } else {
      $(".page-wrapper").removeClass("offcanvas-bookmark");
    }
  });
})(jQuery);

$(".loader-wrapper").fadeOut("slow", function () {
  $(this).remove();
});

$(window).on("scroll", function () {
  if ($(this).scrollTop() > 600) {
    $(".tap-top").fadeIn();
  } else {
    $(".tap-top").fadeOut();
  }
});
$(".tap-top").click(function () {
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    600
  );
  return false;
});

function toggleFullScreen() {
  if (
    (document.fullScreenElement && document.fullScreenElement !== null) ||
    (!document.mozFullScreen && !document.webkitIsFullScreen)
  ) {
    if (document.documentElement.requestFullScreen) {
      document.documentElement.requestFullScreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullScreen) {
      document.documentElement.webkitRequestFullScreen(
        Element.ALLOW_KEYBOARD_INPUT
      );
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}
(function ($, window, document, undefined) {
  "use strict";
  var $ripple = $(".js-ripple");
  $ripple.on("click.ui.ripple", function (e) {
    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find(".c-ripple__circle");
    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;
    $circle.css({
      top: y + "px",
      left: x + "px",
    });
    $this.addClass("is-active");
  });
  $ripple.on(
    "animationend webkitAnimationEnd oanimationend MSAnimationEnd",
    function (e) {
      $(this).removeClass("is-active");
    }
  );
})(jQuery, window, document);

$(".chat-menu-icons .toogle-bar").click(function () {
  $(".chat-menu").toggleClass("show");
});

// active link
