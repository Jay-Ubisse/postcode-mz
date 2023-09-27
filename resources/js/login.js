import './bootstrap';
$(document).ready(function () {

    $('.admin-tab').click(function (e) { 
        e.preventDefault();
        $('.user-tab').removeClass('tab-active');
        $('.admin-tab').addClass('tab-active');
        $('.role-field').val("Administrador");
    });

    $('.user-tab').click(function (e) { 
        e.preventDefault();
        $('.admin-tab').removeClass('tab-active');
        $('.user-tab').addClass('tab-active');
        $('.role-field').val("Usuário");
    });
});