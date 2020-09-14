$(document).ready(function(){
    $(document).on('click', '.btn-add-to-cart', function(e){
        var target = $(e.currentTarget);

        var product_id = target.data('product-id');

        var settings = {
            "url": "add_to_cart.php?product_id=" + product_id,
            "method": "GET",
            "timeout": 0,
          };
          
          $.ajax(settings).done(function (response) {
            console.log(response);
            location.reload();
          });
    });

});
