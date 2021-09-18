$(document).ready(function () {
    $('#cep').blur(function (event) {
        $.ajax({
            method: 'POST',
            url: '/cep',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'cep': $(this).val(),
            },
            success: function (callback) {
                var jsonResponse = JSON.parse(callback)
                if (!jsonResponse.erro) {
                    $("input[name=endereco]").val(jsonResponse.logradouro);
                    $("input[name=bairro]").val(jsonResponse.bairro);
                    $("input[name=cidade]").val(jsonResponse.cidade);
                    $("input[name=estado]").val(jsonResponse.uf_extenso);
                } else {
                    $('#alert').html('<span>Favor preencha um CEP valido. </span>').show();
                    $("input[name=cep]").val('');
                    setTimeout(function () {
                        $('#alert').hide();
                    }, 3000);
                }
            }
        });
    });


});