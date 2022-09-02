$(()=>{
    "use strict"; // Start of use strict

    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
        if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
        };
    });

    // Close any open menu accordions when window is resized below 768px
    $(window).resize(function() {
        if ($(window).width() < 768) {
            $('.sidebar .collapse').collapse('hide');
        };

        // Toggle the side navigation when window is resized below 480px
        if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
            $("body").addClass("sidebar-toggled");
            $(".sidebar").addClass("toggled");
            $('.sidebar .collapse').collapse('hide');
        };
    });

    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
        if ($(window).width() > 768) {
            var e0 = e.originalEvent,
                delta = e0.wheelDelta || -e0.detail;
            this.scrollTop += (delta < 0 ? 1 : -1) * 30;
            e.preventDefault();
        }
    });

    // Scroll to top button appear
    $(window).scroll(function() {
        var scrollDistance = $(document).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    // Smooth scrolling using jQuery easing
    $('a.scroll-to-top').click( function(e) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 800);
        e.preventDefault();
    });


    //console.log($(".show .collapse-item").attr("href"));//get the first element selected
    $(".show .collapse-item").each(function () {
        // console.log($(this).attr("href"));
        var hrefArray = $(this).attr("href").split('/');
        var actionFromLink = hrefArray[hrefArray.length - 1].replace('-', '').toLowerCase();

        if (actionFromLink == $("#currentController").text().toLowerCase() && $("#currentAction").text().toLowerCase() == 'index') {
            //if index page clicked,actionFromLink will be controller name + action is index
            $(this).addClass('active');

        } else if (actionFromLink == $("#currentAction").text().toLowerCase()) {
            //if other page clicked,the action(link) will match the action(method)
            $(this).addClass('active');
        }
    })






})
