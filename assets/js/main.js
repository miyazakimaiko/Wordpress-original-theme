//
// Main screen effect
//
$(function() {

    //Cache the window object
    var $window = $(window);

    //Parallax background effect
    $('section[data-type="background"]').each(function() {

        var $bgobj = $(this);

        $window.scroll(function() {

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            var coords = '80% '+ yPos + 'px';

            $bgobj.css({ backgroundPosition: coords });
        });

    });

});

//
// adding schema.org 
//

$(".nav-bar ul li").attr("itemprop", "url");

$(".nav-bar ul li a").attr("itemprop", "name");
