import { domReady } from "@roots/sage/client";

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

$(document).ready(function () {
  // Toggle menu
  $(document).on("click", ".hamburger", function (e) {
    $(".primary-nav").toggleClass("hidden");
  });

  // Open filter
  $(document).on("click", ".filter-btn", function (e) {
    $(this).closest("h3").next(".filters").toggleClass("hidden");
    $(this).find(".ml-6").find(".minus").toggleClass("hidden");
    $(this).find(".ml-6").find(".plus").toggleClass("hidden");
  });

  $(".search-expert").click(function() {
    var val = $('#expertises').val();

    if(val != '#') {
      window.location.href = val;
    }
  });

  // Toggle popup form
  $(document).on("click", ".close-popup svg", function (e) {
    $(".popup-form").toggleClass("hidden");
    $(".popup-close").toggleClass("hidden");
    $(".popup-open").toggleClass("hidden");
  });
});
