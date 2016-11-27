$(function(){
    var memberchecked = $('input[name=member]:checked').val();
    var freshmanchecked = $('input[name=freshman]:checked').val();

    $('input[name=member]').click(function(){
        if($(this).val() == true) {
            $(this).prop('checked', false);
            memberchecked = false;
        } else {
            memberchecked = $(this).val();
            $('input[name=freshman]').prop('checked', false);
        }
    });

    $('input[name=freshman]').click(function(){
        if($(this).val() == true) {
            $(this).prop('checked', false);
            freshmanchecked = false;
        } else {
            freshmanchecked = $(this).val();
            $('input[name=member]').prop('checked', false);
        }
    });

});
