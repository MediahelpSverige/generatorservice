(function($) {

	//alert('triggered');

    $(document).on( 'click', '.produkt-header', function( event ) {
        event.preventDefault();

        console.log($(this).attr('id'));

        var id = $(this).attr('id')

        $.ajax({
        url: ajaxpagination.ajaxurl,
        type: 'post',
        data: {
            action: 'my_ajax',
            id: id
        },
        success: function( html ) {
        	console.log(html);
        	$('#ajax-response').empty();
            $('#ajax-response').append(html)
        },

        error: function(response){
        	console.log(response);
        }

    })


    })
})(jQuery)
