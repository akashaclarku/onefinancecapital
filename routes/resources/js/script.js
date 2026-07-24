import $ from 'jquery';

$(document).ready(function () {

  var itemSelector = ".grid-item";



  var $container = $("#container").isotope({

    itemSelector: itemSelector,

    masonry: {

      columnWidth: itemSelector,

      isFitWidth: true,

    },

  });



  // Ascending order

  var responsiveIsotope = [

    [480, 4],

    [720, 2],

  ];



  var itemsPerPageDefault = 9;

  var itemsPerPage = defineItemsPerPage();

  var currentNumberPages = 1;

  var currentPage = 1;

  var currentFilter = "*";

  var filterAtribute = "data-filter";

  var pageAtribute = "data-page";

  var pagerClass = "isotope-pager";



  function changeFilter(selector) {

    $container.isotope({

      filter: selector,

    });

  }



  function goToPage(n) {

    currentPage = n;



    var selector = itemSelector;

    selector +=

      currentFilter != "*"

        ? "[" + filterAtribute + '="' + currentFilter + '"]'

        : "";

    selector += "[" + pageAtribute + '="' + currentPage + '"]';



    changeFilter(selector);

  }



  function defineItemsPerPage() {

    var pages = itemsPerPageDefault;



    for (var i = 0; i < responsiveIsotope.length; i++) {

      if ($(window).width() <= responsiveIsotope[i][0]) {

        pages = responsiveIsotope[i][1];

        break;

      }

    }

    return pages;

  }



  function setPagination() {

    var SettingsPagesOnItems = (function () {

      var itemsLength = $container.children(itemSelector).length;

      var pages = Math.ceil(itemsLength / itemsPerPage);

      var item = 1;

      var page = 1;

      var selector = itemSelector;

      selector +=

        currentFilter != "*"

          ? "[" + filterAtribute + '="' + currentFilter + '"]'

          : "";



      $container.children(selector).each(function () {

        if (item > itemsPerPage) {

          page++;

          item = 1;

        }

        $(this).attr(pageAtribute, page);

        item++;

      });

      currentNumberPages = page;

    })();



    var CreatePagers = (function () {

      var $isotopePager =

        $("." + pagerClass).length == 0

          ? $('<div class="' + pagerClass + '"></div>')

          : $("." + pagerClass);

      $isotopePager.html("");

      for (var i = 0; i < currentNumberPages; i++) {

        var $pager = $(

          '<a href="javascript:void(0);" class="pager" ' +

            pageAtribute +

            '="' +

            (i + 1) +

            '"></a>'

        );

        $pager.html(i + 1);

        $pager.click(function () {

          var page = $(this).eq(0).attr(pageAtribute);

          goToPage(page);

        });

        $pager.appendTo($isotopePager);

      }

      $container.after($isotopePager);

    })();

  }



  setPagination();

  goToPage(1);



  // Adding event for filter categories and adding active class

  $(".button-group a").click(function () {

    var filter = $(this).attr(filterAtribute);

    currentFilter = filter;



    // Add active class to the clicked filter and remove it from others

    $(".button-group a").removeClass("is-checked");

    $(this).addClass("is-checked");



    setPagination();

    goToPage(1);

  });



  // Responsive event

  $(window).resize(function () {

    itemsPerPage = defineItemsPerPage();

    setPagination();

    goToPage(1);

  });

});



const navbar = document.getElementById("navbar");



// Listen to the window scroll event

window.addEventListener("scroll", function () {

  // Check if the scroll position is greater than 100px

  if (window.scrollY > 100) {

    navbar.classList.add("scrolled");

  } else {

    navbar.classList.remove("scrolled");

  }

});



// Get the navbar-toggler button and the body element

const navbarToggler = document.getElementById("navbar-toggler");

const body = document.body;



// Listen for the click event on the navbar toggler

navbarToggler.addEventListener("click", function () {

  // Toggle the 'collapsed' class on the navbar toggler

  navbarToggler.classList.toggle("collapsed");



  // Toggle the 'no-scroll' class on the body element

  if (navbarToggler.classList.contains("collapsed")) {

    body.classList.add("no-scroll"); // Disable scrolling

  } else {

    body.classList.remove("no-scroll"); // Enable scrolling

  }

});





// script.js



// Function to check if an element is in the viewport

function isInViewport(element) {

  const rect = element.getBoundingClientRect();

  return rect.top >= 0 && rect.bottom <= window.innerHeight;

}



// Function to add the 'active' class with delay when elements are in view

function handleScroll() {

  const elements = document.querySelectorAll('.animated-div');

  elements.forEach((element, index) => {

    if (isInViewport(element) && !element.classList.contains('active')) {

      // Generate a random delay between 0 and 0.5 seconds

      const delay = Math.random() * 0.5; // Delay from 0 to 0.5 seconds



      // Set the delay as an inline style (this is in seconds)

      element.style.transitionDelay = `${delay}s`;



      // Add the 'active' class to trigger the animation

      element.classList.add('active');

    }

  });

}



// Listen for scroll events

window.addEventListener('scroll', handleScroll);



// Trigger the scroll handler once to check if elements are already in view on page load

handleScroll();

