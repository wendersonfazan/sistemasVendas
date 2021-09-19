$(document).ready(function (){
   $('form[name|="buscarProdutos"]').submit(function (event){
      event.preventDefault();

      $.ajax({
         method: 'GET',
         url: '/getProductByFilter',
         data: {
            'produto': $("input[name=produto]").val(),
            'referencia': $("input[name=referencia]").val()
         },
         success: function (callback) {
            $('#detalhesProdutos').html(callback).show();
         }
      });
   })
});