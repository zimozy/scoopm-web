$(function() {

    $('body').addClass('no-scroll');

    $('#card1').animate({
        opacity: '1',
        // marginTop: '0px'
        },
        700
    );
    
    setTimeout(function() {
        $('#card2').animate({
            opacity: '1',
            // marginTop: '0px'
            },
            700
        );
    }, 300);
    
    setTimeout(function() {
        $('#card3').animate({
            opacity: '1',
            // marginTop: '0px'
            },
            700
        );
    }, 600); 
    

    function hideGreeting() {
        $('body').removeClass('no-scroll');
    }
    //// first thing
    // $('input:text:first').focus();
    
    
    
    
    $('#test').click(function(event) {
        event.preventDefault();
        
        // $('#greeting').animate({height:'0px'},{'complete': function() {
        //     $('#greeting').hide();
        // }});
        // // // $('#greeting').slideUp('slow');
        $('.fade-out').animate(
            {
                opacity: '0',
                height: '50%'
            },
            700
        ).css('display', 'none');

        $('.fade-in').css('visibility', 'visible').animate(
            {
                opacity: '1'
            },
            1000
        );
    
    });


});

