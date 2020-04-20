$(document).ready(function(){
    $('#verbo').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"/fetch",
                method: "GET",
                data:{query: query, _token:_token},
                success:function(data)
                {
                    $('#autocomplete_VerbosLSM').show();
                    $('#autocomplete_VerbosLSM').html(data);

                }
            });
        } else {
            $('#autocomplete_VerbosLSM').fadeOut();
        }
    });


    $(document).on('click','#texto_autocomplete', function(){
        $('#verbo').val($(this).text());
        $('#autocomplete_VerbosLSM').fadeOut();
    });


});

