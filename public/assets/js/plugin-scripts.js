jQuery(function ($) {

    'use strict';

    // Masonry for Grid Styles
    $('.tr-masonry-content').masonry({
        itemSelector: '.tr-masonry',
        columnWidth: 0
    });

    // -------------------------------------------------------------
    //  Slick Slider
    // -------------------------------------------------------------

    $(".tr-slider-1-no-arrows").slick({
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 1,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 1,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>'

    });

    $(".tr-slider-1-style-2").slick({
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 1,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 1,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>'

    });

    $(".tr-slider-1-style-2").slick({
        infinite: true,
        dots: false,
        arrows: true,
        slidesToShow: 1,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 1,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>'

    });

    // tr-slider-1

    $('.tr-slider-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.tr-slider-nav'
    });

    $('a[data-slide]').on("click", function(e) {
        e.preventDefault();
        var slideno = $(this).data('fade');
        $('.tr-slider-nav').slick('slickGoTo', slideno - 1);
    });

    // tr-slider-2

    $('.tr-slider-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.tr-slider-nav-2'
    });

    $('a[data-slide]').on("click", function(e) {
        e.preventDefault();
        var slideno = $(this).data('fade');
        $('.tr-slider-nav-2').slick('slickGoTo', slideno - 1);
    });

    // tr-slider-3
    $('.tr-slider-3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.tr-slider-nav-3'
    });

    $('a[data-slide]').on("click", function(e) {
        e.preventDefault();
        var slideno = $(this).data('fade');
        $('.tr-slider-nav-3').slick('slickGoTo', slideno - 1);
    });

    // tr-slider-4

    $('a[data-slide]').on("click", function(e) {
        e.preventDefault();
        var slideno = $(this).data('fade');
        $('.tr-slider-nav-4').slick('slickGoTo', slideno - 1);
    });

    // tr-slider-2-style-2

    $(".tr-slider-2-style-2").slick({
        infinite: true,
        dots: false,
        arrows: true,
        slidesToShow: 2,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 2,

    });

    // tr-slider-2-style-3

    $(".tr-slider-2-style-3").slick({
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 2,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 2,

    });

    // tr-slider-grid-1

    $(".tr-slider-grid-1").slick({
        infinite: true,
        dots: true,
        arrows: true,
        slidesToShow: 1,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 1,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>'

    });

    // tr-slider-grid-2

    $(".tr-slider-grid-2 .tr-grid-slider").slick({
        infinite: true,
        dots: true,
        arrows: true,
        slidesToShow: 2,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 2,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
          }
        }
        ]

    });

    // tr-slider-grid-3

    $(".tr-slider-grid-3 .tr-grid-slider").slick({
        infinite: true,
        dots: true,
        arrows: true,
        slidesToShow: 3,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 3,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
          }
        }
        ]
    });

    // tr-slider-grid-4

    $(".tr-slider-grid-4").slick({
        infinite: true,
        dots: false,
        arrows: false,
        slidesToShow: 4,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 4,
    });

// script end
});
