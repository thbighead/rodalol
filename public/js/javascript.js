$(document).ready(function () {
    //  mudar velocidade de intervalo do slideshow
    $('.carousel').carousel({
        interval: 5000
    });

//mostrar e esconder modal
    $("#forgot").bind('click', function () {
        $("#loginModal").modal('hide');
        $("#forgotPassword").modal('show');
    }); // 'Esqueci minha senha'

    $("#forgetIt").bind('click', function () {
        $("#forgotPassword").modal('hide');
        $("#loginModal").modal('show');
    }); // 'Espere, consegui lembrar!'
});

//Fix para o bug do padding-left ao sair do Esqueci a senha
$(document).ready(function () {
    $('.modal').on('show.bs.modal', function () {
        if ($(document).height() > $(window).height()) {
            // no-scroll
            $('body').addClass("modal-open-noscroll");
        }
        else {
            $('body').removeClass("modal-open-noscroll");
        }
    })
    $('.modal').on('hide.bs.modal', function () {
        $('body').removeClass("modal-open-noscroll");
    })
})