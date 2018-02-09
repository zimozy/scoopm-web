$(function() {

    animationProps = {
        opacity: '1',
        margin: '0px'
    }

    animationSpeed = 700;
    
    $('#card1').animate(animationProps, animationSpeed);
    
    setTimeout(function() {
        $('#card2').animate(animationProps, animationSpeed);
    }, 300);
    
    setTimeout(function() {
        $('#card3').animate(animationProps, animationSpeed);
    }, 600);

});

