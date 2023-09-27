import './bootstrap';
$(document).ready(function () {
    $('.admin-field').hide();

    $('.admin-tab').click(function (e) { 
        e.preventDefault();
        $('.user-tab').removeClass('tab-active');
        $('.admin-tab').addClass('tab-active');
        $('.user-field').hide();
        $('.admin-field').show();
    });

    $('.user-tab').click(function (e) { 
        e.preventDefault();
        $('.admin-tab').removeClass('tab-active');
        $('.user-tab').addClass('tab-active');
        $('.admin-field').hide();
        $('.user-field').show();
    });
});