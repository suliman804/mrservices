(function ($) {
    "use strict";


    jQuery(function ($) {

        //MixitUp Activate
        if ($.fn.mixItUp) {
            $('.portfolio-items').mixItUp();
        }


        //Slick Slider
        $('.client-images').slick({
            slidesToShow: 5,
            slidesToScroll: 0,
            asNavFor: '.client-reviews',
            centerMode: true,
            focusOnSelect: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.client-reviews').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.client-images'
        });



        //Members Hover
        $('.team-member').on('mouseenter', function () {
            var key = $(this).data('key');
            $('.bio-btn.btn-'+key).addClass('active');
            $('.member-bio.bio-'+key).addClass('show');
        });

        $('.team-member').on('mouseleave', function () {
            var key = $(this).data('key');
            $('.bio-btn.btn-'+key).removeClass('active');
            $('.member-bio.bio-'+key).removeClass('show');
        });
    


        $('.single-member.member-1').on('mouseenter', function () {
            $('.bio-btn.btn-one').addClass('active');
            $('.member-bio.bio-one').addClass('show');
        });

        $('.single-member.member-1').on('mouseleave', function () {
            $('.bio-btn.btn-one').removeClass('active');
            $('.member-bio.bio-one').removeClass('show');
        });

        $('.single-member.member-2').on('mouseenter', function () {
            $('.bio-btn.btn-two').addClass('active');
            $('.member-bio.bio-two').addClass('show');
        });

        $('.single-member.member-2').on('mouseleave', function () {
            $('.bio-btn.btn-two').removeClass('active');
            $('.member-bio.bio-two').removeClass('show');
        });


        $('.single-member.member-3').on('mouseenter', function () {
            $('.bio-btn.btn-three').addClass('active');
            $('.member-bio.bio-three').addClass('show');
        });

        $('.single-member.member-3').on('mouseleave', function () {
            $('.bio-btn.btn-three').removeClass('active');
            $('.member-bio.bio-three').removeClass('show');
        });


        $('.single-member.member-4').on('mouseenter', function () {
            $('.bio-btn.btn-four').addClass('active');
            $('.member-bio.bio-four').addClass('show');
        });

        $('.single-member.member-4').on('mouseleave', function () {
            $('.bio-btn.btn-four').removeClass('active');
            $('.member-bio.bio-four').removeClass('show');
        });


        $('.single-member.member-5').on('mouseenter', function () {
            $('.bio-btn.btn-five').addClass('active');
            $('.member-bio.bio-five').addClass('show');
        });

        $('.single-member.member-5').on('mouseleave', function () {
            $('.bio-btn.btn-five').removeClass('active');
            $('.member-bio.bio-five').removeClass('show');
        });

        $('.single-member.member-6').on('mouseenter', function () {
            $('.bio-btn.btn-six').addClass('active');
            $('.member-bio.bio-six').addClass('show');
        });

        $('.single-member.member-6').on('mouseleave', function () {
            $('.bio-btn.btn-six').removeClass('active');
            $('.member-bio.bio-six').removeClass('show');
        });



        //Search Box Trigger
        $('span.trigger').on('click', function () {
            $('.search-input-box').toggleClass('show-search-box');
        });


        //Counter Up
        $('.count').counterUp({
            time: 1000
        });

        //LightBox PrettyPhoto Activate
        $("a.prettyPhoto").prettyPhoto();


        //Sticky Menu
        $('#headerArea2, #headerArea').sticky();
        $('.main-menu-area').sticky();


        // jQuery smooth scroll
        $('li.smooth-scroll a, .scroll-bottom a').on('click', function (event) {
            var $anchor = $(this);
            var headerH = '65';
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
            }, 1200, 'easeInOutExpo');

            event.preventDefault();
        });


        //Bootstrap Menu Function
        $('.nav.navbar-nav').on('click', function(){
            $('.navbar-collapse').removeClass('in');
        })

        // Bootstrap scroll psy
        $('body').scrollspy({
            target: '.navbar-collapse',
            offset: 95
        });

        //Jquery ScrollTop
        $(".scroll_top").on('click', function (e) {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            e.preventDefault();
        });


        //Pricing Table Slider
        $('.pricing-table-wrap').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            centerMode: true,
            focusOnSelect: true,
            infinite: false,
            prevArrow: '<div class="btn-slick-prev"><i class="fa fa-angle-left"></i></div>',
            nextArrow: '<div class="btn-slick-next"><i class="fa fa-angle-right"></i></div>',
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                        },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                        },
                {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
        });
        
        $("#Slider-carousel").on('swiperight', function() {
          $(this).carousel('prev');
        });
        $("#Slider-carousel").on('swipeleft',function() {
          $(this).carousel('next');
        });

        $.mobile.loading().hide();
        $.mobile.ajaxEnabled=false;
        $.mobile.loadingMessage = false;

    });
    


}(jQuery));
