$(document).ready(function(){

    var pages = ["aboutYou", "yourCar", "insurance", "application"];

    function showPage(page) {
        if (validate()) {
            var currentPage = $('.current-page');
            var newPage     = $('#' + page + 'Page');

            currentPage.addClass('d-none');
            currentPage.removeClass('.current-page');

            newPage.removeClass('d-none');
            newPage.addClass('current-page');

            for (thisPage in pages) {
                var link = $('#' + pages[thisPage] + 'Link');
                link.removeClass('text-muted');
                if (pages[thisPage] == page) {
                    $('#progressLinks .underlined').removeClass('underlined');
                    link.addClass('underlined');
                    break;
                }
            }
        }
    }

    function setPageLink(page) {
        $('#' + page + 'Link').on('click', function(e) {
            e.preventDefault();
            showPage(page);    
        });
    }

    function next() {
        if (validate()) {
              // $('#needs-validation').submit();

            var currentPage = $('.current-page');
            var currentPageID = currentPage.attr('id');

            for (page in pages) {
                
                var currentPageLink = $('#' + pages[page] + 'Link');
                currentPageLink.removeClass('text-muted');

                if ((pages[page] + 'Page') === currentPageID) {
                    var newPage = pages[Number(page) + 1];
                    var newPageRef = $('#' + newPage + 'Page');
                    
                    currentPage.addClass('d-none');
                    currentPage.removeClass('current-page');

                    newPageRef.removeClass('d-none');
                    newPageRef.addClass('current-page');
                    

                    $('#progressLinks .underlined').removeClass('underlined');
                    var newPageLink = $('#' + newPage + 'Link')
                    newPageLink.addClass('underlined');
                    newPageLink.removeClass('text-muted');
        
                    break;
                }
            }
        }
    }

    function back() {
        var currentPage = $('.current-page');
        var currentPageID = currentPage.attr('id');

        for (page in pages) {

            if ((pages[page] + 'Page') === currentPageID) {
                var newPage = pages[Number(page) - 1];
                var newPageRef = $('#' + newPage + 'Page');
                
                currentPage.addClass('d-none');
                currentPage.removeClass('current-page');

                newPageRef.removeClass('d-none');
                newPageRef.addClass('current-page');
                

                $('#progressLinks .underlined').removeClass('underlined');
                var newPageLink = $('#' + newPage + 'Link')
                newPageLink.addClass('underlined');
                
                break;
            }
        }
    }

        function validate() {
            var validated = true;
            var currentPageId = '#' + $('.current-page').attr('id');

            $(currentPageId + ' :text').each( function() {
                if (!$(this).val()) {
                    $(this).addClass('is-invalid');
                    validated = false;
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $(currentPageId + ' .email').each(function() {
                if (! /.+@.+\..+/.test( $(this).val() ) ) {
                    $(this).addClass('is-invalid');
                    validated = false;
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $(currentPageId + ' :password').each(function() {

                var passwordHint = $(this).siblings('small');
                
                if ($(this).val().length < 6) {
                    $(this).addClass('is-invalid');
                    passwordHint.addClass('invalid-feedback');
                    passwordHint.removeClass('text-muted');
                    validated = false;
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                    passwordHint.removeClass('invalid-feedback');
                    passwordHint.addClass('text-muted');
                }
            });

            $(currentPageId + ' .confirm-password').each(function() {
                if($(':password:first').val()) {
                    if ($(this).val() !== $('input:password:first').val()) {
                        $(this).addClass('is-invalid');
                        $(this).siblings('small').removeClass('d-none');
                        validated = false;
                    } else {
                        $(this).removeClass('is-invalid');
                        $(this).addClass('is-valid');
                        $(this).siblings('small').addClass('d-none');
                    }
                }
            }); 


            
            $('needs-validation').addClass('was-validated');

            return validated;
        }

    // for (page in pages) {
    //     setPageLink(pages[page]);
    // }

    // $('#progressLinks a').on('click', function() {
    //     event.preventDefault();
    //     next();
    // })

    $('#progressLinks a').on('click', function(event) {
        event.preventDefault();
        if (validate()) {
            var currentPageRef  = $('.current-page');
            var currentPage     = currentPageRef.attr('id');
            var clickedLinkToID = '#' + $(this).attr('id').replace('Link', 'Page');
            var newPage         = $(clickedLinkToID);

            currentPageRef.removeClass('.current-page');
            currentPageRef.addClass('d-none');
            
            newPage.addClass('current-page');
            newPage.removeClass('d-none');
            
            var thisPage = 0;
            for (thisPage in pages) {
                var link = $('#' + pages[thisPage] + 'Link');
                link.removeClass('text-muted');
                if (pages[thisPage] == currentPage) {
                    $('#progressLinks .underlined').removeClass('underlined');
                    link.addClass('underlined');
                    break;
                }
            }
        }
    });

    $('.next-button').on('click', function(event) {
        event.preventDefault();
        next();
    });

    $('.back-button').on('click', function(event) {
        event.preventDefault();
        back();
    });

    $('input').keypress(function(event) {
        if ( event.which == 13 ) {
           event.preventDefault();
           next();
        }
    });

});