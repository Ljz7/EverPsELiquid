$(document).ready(function() {
    $('input[name=eliquidInput]').on('input', function() {
        var calculation = calculateBoostAndBase(
            $('#quantity').val(),
            $('#nicotine').val()
        );
        
        if (!calculation) {
            $('.error').fadeIn();
            setTimeout(function() {
                $('.error').fadeOut();
            }, 5000);
        } else {
            $('#booster').html(calculation.booster);
            $('#base').html(calculation.base);
        }
	});
});

function calculateBoostAndBase(quantity, nicotine) {
    if (!validateQuantity(quantity)) {
        return false;
    }
    if (!validateNicotine(nicotine)) {
        return false;
    }

    var booster = (nicotine / 20) * quantity;
    var base = quantity - booster;

    return {booster: booster, base: base};
}

function validateQuantity(quantity) {
    return quantity > 0;
}

function validateNicotine(nicotine) {
    return nicotine > 0 && nicotine < 20;
}
