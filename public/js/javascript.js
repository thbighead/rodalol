$(document).ready(function () {
    //  mudar velocidade de intervalo do slideshow
    $('.carousel').carousel({
        interval: 5000
    });

    $("#forgot").bind('click', function () {
        $("#loginModal").modal('hide');
        $("#forgotPassword").modal('show');
    }); // 'Esqueci minha senha'

    $("#forgetIt").bind('click', function () {
        $("#forgotPassword").modal('hide');
        $("#loginModal").modal('show');
    }); // 'Espere, consegui lembrar!'
});
