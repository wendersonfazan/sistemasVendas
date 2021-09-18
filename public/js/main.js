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


    $("#produto").on('change', function (){
        $.ajax({
            method: 'GET',
            url: '/getProduct',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'produto': $(this).val(),
            },
            success: function (callback) {
                var jsonResponse = JSON.parse(callback)


                var locale = 'brl';
                var options = {style: 'currency', currency: 'brl', minimumFractionDigits: 2, maximumFractionDigits: 2};
                var formatter = new Intl.NumberFormat(locale, options);
                var valorFormatado = formatter.format(jsonResponse.preco);

                $("input[name=valor]").val(valorFormatado);
                $("input[name=fornecedores]").val(jsonResponse.fornecedores);


            }
        });
    });


});