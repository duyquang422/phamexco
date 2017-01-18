jQuery(document).ready(function($){
    $("#list-of-products").owlCarousel({
        nav: true,
        slideSpeed: 1000,
        paginationSpeed: 3800,
        items: 4,
        margin: 30,
        lazyLoad: true,
        autoPlay: false,
        transitionStyle: "fade",
        loop: true
    });

    $("#list-news").owlCarousel({
        nav: true,
        slideSpeed: 1000,
        paginationSpeed: 3800,
        items: 1,
        lazyLoad: true,
        autoPlay: false,
        transitionStyle: "fade",
        loop: true
    });
})