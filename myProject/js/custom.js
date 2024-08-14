$(document).ready(function () {
  // executes when HTML-Document is loaded and DOM is ready
  // Most Popular Course Card Hover Effect
  $(".card").hover(
    function () {
      $(this).addClass("shadow").css("cursor", "pointer");
    },
    function () {
      $(this).removeClass("shadow");
    }
  );
});
