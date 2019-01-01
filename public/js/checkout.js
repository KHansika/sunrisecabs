var stripe = Stripe('pk_test_Hbn9ZhtgevYcp3UVahbsx6N4');
var $form=$('#checkout-form');
$form.submit(function(event){
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled',true);
    Stripe.card.createToken({
        number:$('#card-number').val(),
        cvs:$('#ccard-cvs').val(),
        exp_month:$('#card-ex-month').val(),
        exp_year:$('#card-ex-year').val(),
        name:$('#cardname').val(),
    
    }, stripeResponseHandler);
    return false;
});
function stripeResponseHandler(status, response){
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled',false);
    }else{
        var token=response.id;
        $form.append($('<input type="hidden" name="StripeToken"/>').val(token));
        //submit the form
        $form.get(0).submit();
    }

}