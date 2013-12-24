$(document).ready(function() {
    $('.image').click(function() {
        $('.modal-picture').css({'display': 'block'});
    });

    $('.close-picture, .modal-background').click(function() {
        $('.modal-picture').css({'display': 'none'});
    });
});