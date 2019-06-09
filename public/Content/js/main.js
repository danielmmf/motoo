$(".bt-voltar").click(function(event) {
    event.preventDefault();
    history.back(1);
});

$(document).ready(function() {

    var docHeight = $(window).height();
    var footerHeight = $('.footer').height();
    var footerTop = $('.footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('.footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
    }

    $("#cpf").val(localStorage.getItem("cpf"));
    //var number = $(".proc");
    //var bar = $(".bar-cadastro");
    //bar.html(number)

});

$(".progress div").each(function() {
    var display = $(this),
        number = $(".proc"),
        currentValue = parseInt(display.text()),
        nextValue = $(this).attr("data-values"),
        diff = nextValue - currentValue,
        step = (0 < diff ? 1 : -1);
    if (nextValue == "0") {
        $(display).css("padding", "0");
    }
    else {
        $(display).css("color", "#fff").animate({
            "width": nextValue + "%"
        }, "slow");
    }

    for (var i = 0; i < Math.abs(diff); ++i) {
        setTimeout(function() {
            currentValue += step
            display.html("<span>" + currentValue + " %</span>");


        }, 30 * i);
    }
});


$(document).on('click', '.number-spinner a', function() {
    var btn = $(this),
        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
        newVal = 0;

    if (btn.attr('data-dir') == 'up') {
        newVal = parseInt(oldValue) + 1;
    }
    else {
        if (oldValue > 1) {
            newVal = parseInt(oldValue) - 1;
        }
        else {
            newVal = 1;
        }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
});


function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('icon-down icon-down-up');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);


$(document).ready(function() {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

    trigger.click(function() {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        }
        else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function() {
        $('#wrapper').toggleClass('toggled');
    });
    $('#nascimento').mask('00/00/0000');

    $('#registrar').click(function() {
        if ($("#cpf").val() == "") {
            $("#resposta").html("Por favor preencha seu cpf para continuar");
        }
        else {
            $.post('validar_cpf', { "cpf": $("#cpf").val() }).done(function(response) {
                // alert(response.status);
                if (response.status == 1) {
                    localStorage.setItem("cpf", $("#cpf").val());
                    console.log(response.usuario);
                    localStorage.setItem("usuario", JSON.stringify(response.usuario));
                    window.location.href = "/del-valle/registrar-segundo";
                }
                else {
                    $("#resposta").html("Seu cpf não foi encontrado em nossa base de dados");
                }
            });
        }
    });

    function getEndereco() {
        if ($.trim($("#cep").val()) != "") {
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=" + $("#cep").val(), function() {
                if (resultadoCEP["resultado"]) {
                    $("#rua").val(unescape(resultadoCEP["tipo_logradouro"]) + " " + unescape(resultadoCEP["logradouro"]));
                    $("#bairro").val(unescape(resultadoCEP["bairro"]));
                    $("#cidade").val(unescape(resultadoCEP["cidade"]));
                    $("#uf").val(unescape(resultadoCEP["uf"]));
                }
                else {
                    alert("Cep invalido !");
                    //jqDialog.notify("Cep Invalido", 0);
                }
            });
        }
    }

    $('#cep').on('blur', function() {
        getEndereco();
    });
    $('#validar_form_segunda').click(function(e) {
        e.preventDefault();
        $("#cadastrar").trigger("click");
    });
    $("#validar_form_terceira").click(function(e) {
        e.preventDefault();
        $("#vaiporra").trigger("click");
    });
    $("form").submit(function(e) {
        e.preventDefault()
        //console.log($(this).serialize());
        var form = $(this).serialize();
        var action = $(this).attr("action");
        $.post(action, form, function(data) {
            console.log(data);
            if (data.status == 1) {
                var porcentagem = data.percent;
                $('#cadastro' + porcentagem).modal('show');
                if (porcentagem === 100) {
                    window.location.href = "/del-valle/minha-pagina"
                }
            }
            else {
                alert("Erro ao salvar seus dados , verifique e tente novamente");
            }

        })
    })

});

function carrega_usuario() {
    var usuario = JSON.parse(localStorage.getItem("usuario"));
    console.log(usuario);
    $('#nome').val(usuario.nome);
    $('#email').val(usuario.email);
    $('#sexo').val(usuario.sexo);
    $('#estado_civil').val(usuario.estado_civil);
    $('#nascimento').val(usuario.nascimento);
    $('#perfil').val(usuario.perfil);
    $('#rg').val(usuario.rg);
    $('#email_comercial').val(usuario.email_comercial);

}
