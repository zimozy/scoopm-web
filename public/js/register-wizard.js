$(function() {
    var pages       = ["aboutYou", "yourCar", "insurance", "application", "disclosure", "authorization", "references"];
    var currentPage = pages[0];
    
    function goTo(newPage) {
        var scrollPoint = 0;

        if ( $(document).width() <= 576) {
            progressLinks = $('#progress-links');
            scrollPoint = progressLinks.offset().top; // + progressLinks.height()
        } else {
            scrollPoint = $('body').offset().top;
        }
            
        var currentPageObj = $('#' + currentPage + 'Page');
        var newPageObj = $('#' + newPage + 'Page');

        if ( (document.documentElement.scrollTop || document.body.scrollTop) > scrollPoint) {        
            $('html,body').animate({
                    scrollTop: scrollPoint
                },
                150);
        }
        
        currentPageObj.fadeOut(150, function() {
            newPageObj.fadeIn(200);
        });

        currentPage = newPage;
        updateProgressLinks();
    }

    function updateProgressLinks() {
        $('#progress-links .current-page').removeClass('current-page');
        
        for (i = 0; i < pages.length; i++) {
            
            var currentLinkObj = $('#' + pages[i] + 'Link');
            
            currentLinkObj.addClass('page-visited');
            
            if (pages[i] == currentPage) {
                currentLinkObj.addClass('current-page');
                break;
            }
        }
    }


    /* PAGE NAME FUNCTIONS */
    function getNextPage() {
        for (i = 0; i < pages.length; i++ ) {
            if (pages[i] == currentPage) {
                return pages[i+1];
                break;
            }
        }
    }

    function getPreviousPage() {
        for (i = 0; i < pages.length; i++ ) {
            if (pages[i] == currentPage) {
                return pages[i-1];
                break;
            }
        }
    }

    function getPageForLinkID(linkID) {
        return linkID.replace('Link', '');
    }

    function firstPageWithErrors() {
        return $('.page:has(.scoopm-is-invalid)').first().attr('id').replace('Page', '');
    }


    /* CONTROL FLOW */
    if (mForm.attr('class') == 'scoopm-was-validated') { //if they've submitted with errors to to the relevant page
        goTo(firstPageWithErrors());
    }

    $('.next-button').on('click', function(event) {
        event.preventDefault();
        goTo(getNextPage());
    });

    $('.back-button').on('click', function(event) {
        event.preventDefault();    
        goTo(getPreviousPage());
    });

    $('#progress-links a').on('click', function(event) {
        event.preventDefault();
        goTo(getPageForLinkID($(this).attr('id')));
    });


    // KEYPRESS: 'ENTER'
    $('input').on('keydown.nextPage', function(event) {
        if ( event.which == 13 ) {
            event.preventDefault();
            if (currentPage == pages[pages.length - 1]) {
                if (!submitButton.prop('disabled')) {
                    mForm.submit();
                }
            } else {
                goTo(getNextPage());
            }
        }
    });

});