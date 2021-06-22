// Header Category Slide Toggle Script
// Header Category Slide Toggle Script
// Header Category Slide Toggle Script
jQuery(document).ready(function () {
  jQuery("#menu-close").appendTo(".header-main-menu");
  jQuery("#menu-close").removeClass("d-none");
  jQuery("#menu-close").addClass("d-block");
  // menu hover slide effect for submenus
  function myFunction(x) {
    if (x.matches) {
      // If media query matches
      // for mobile tablet Navigation
      jQuery(".header-cat h4").click(function () {
        jQuery(".header-cat").addClass("cat-in");
        jQuery(".header-main-menu").removeClass("menu-in");
        event.stopPropagation();
      });
      jQuery(document).click(function (event) {
        if (event.target.nodeName !== "UL") {
          jQuery(".header-cat").removeClass("cat-in");
        }
      });

      jQuery(".menu-hamburger").click(function () {
        jQuery(".header-cat").removeClass("cat-in");
        jQuery(".header-main-menu").addClass("menu-in");
        event.stopPropagation();
      });
      jQuery(document).click(function (event) {
        if (event.target.nodeName !== "UL") {
          jQuery(".header-main-menu").removeClass("menu-in");
        }
      });
    } else {
      jQuery(".header-cat").click(function () {
        jQuery(".category-wrap").slideToggle();
        jQuery(this).find("i").toggleClass("fa-angle-up");
        jQuery(this).find("i").toggleClass("fa-angle-down");
      });

      jQuery(".menu-hamburger").click(function () {
        jQuery(".header-main-menu").slideToggle();
        jQuery(this).find("i").toggleClass("fa-angle-up");
        jQuery(this).find("i").toggleClass("fa-angle-down");
      });
    }
  }
  var x = window.matchMedia("(max-width: 767px)");
  myFunction(x); // Call listener function at run time
  x.addListener(myFunction); // Attach listener function on state changes

  // mobile category toggle menu
  jQuery(
    "<div class='filter-mob' id='filter-mob'><span class='filter-title'>Filter</span><span class='filter-icon'><img src = '/wp-content/uploads/2021/06/toggle-icon.png' width='25' height='25'></span></div>"
  ).prependTo("#ds-product-filter");
  jQuery("#filter-mob").click(function () {
    jQuery("#ds-product-filter .vc_column-inner").slideToggle("linear");
  });
});
