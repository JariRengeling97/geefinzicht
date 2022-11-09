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
    console.log("test");
    console.log($(this).closest("h3").find(".filters"));
    $(this).prev().next(".filters").toggleClass("hidden");
  });
});
