$(document).ready(function () {
        $('.main_slider-wrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,  
            autoplay: true,
            autoplaySpeed:3000,
        }); 
    
    
        $('.main_price-collect-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            autoplay:true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },                
            ],
        });   
    
        // $('.testimonials_slider').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     arrows: true,
        //     dots: true,  
        //     autoplay:true
        // }); 
        $('.acts-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,    
            autoplay:true
        }); 
        
        $('.post_gallery-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            autoplay:true,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },     
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }, 
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }, 
            ],           
        }); 
    
        var lazyBgImg = function( el ) {
            var lazyBgImgs = $(el).find('.lazy-bg-img');
            lazyBgImgs.each(function(i) {
                var el = $(this);
                if ( !el.hasClass('is-lazy-loaded') ) {
                    el.addClass('is-lazy-loaded');
                }
            });
        }
        $('.main_price-collect-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            if ( currentSlide !== nextSlide ) {
                lazyBgImg( $(slick.$slides.get(nextSlide)) );
            }
        });
});