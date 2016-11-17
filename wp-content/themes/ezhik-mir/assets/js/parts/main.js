// global

jQuery(document).ready(function($) {
    
    // sticky
    
    (function() {

      $(function() {
        return $("[data-sticky_column]").stick_in_parent({
          parent: "[data-sticky_parent]"
        });
      });


    }).call(this);
    
     // slider
    
    $('.front-posts-second-slider').bxSlider();
    
    // wow
    
    setTimeout(function(){
        wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       150,          // default 
                mobile:       true,       // default
                live:         true        // default
            }
        )
        wow.init();
    }, 100);
    
    // transformicons 
    
    transformicons.add('.tcon')

    // scroll top
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });
    
    $('.scroll-top').click(function() {
        $('body,html').animate({scrollTop:0}, '500');
    });
    
    // transform img to svg
    
    $(function(){
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, else we gonna set it if we can.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
    });
    
  // select
    
    $('select').selectOrDie();

});
