jQuery(document).ready(function($){
    //nav mobile
    new Mmenu( "#menu", 
                    {
            // options
            "theme": "white",
        }, 
        {
            // configuration  
            offCanvas   : {
                position    : "bottom",
                page: {
                    selector: "#main-wrapper"
                },
            }
        }
    );
    $(".mm-blocker").off( "mousedown" ).off( "touchstart" );

    //js select 2
    $('.form-selects').select2({
        minimumResultsForSearch: -1
    });

    //scroll to
    $('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({scrollTop: target.offset().top}, 1000, function() {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { 
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); 
                        $target.focus(); 
                    };
                });
            }
        }
    });
});