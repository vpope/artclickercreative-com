$(document).ready(function() {
    $('.start-the-modal').click(function() {
        $('.modal-request').css({'display': 'block'});
    });

    $('.close-the-modal, .modal-background').click(function() {
        $('.modal-request').css({'display': 'none'});
    });
});