;(function($, window, document, undefined) {
    'use strict';

  	//validation
    var form = '.sendApp',
        className = 'sendApp--active',
        number = 'input[type="tel"]',
  			submit = 'input[type="submit"]';

    $(form).each(function() {
        var $form = $(this),
            $number = $form.find(number),
            val = '';

        $number.on('keyup.addClassWhenTel', function() {
            val = $number.val();
          	var status =  /^\+(?:[0-9] ?){10,14}[0-9]$/.test(val);
            $(submit).prop('disabled', !status);
            $form.toggleClass(className, val != '' && status );
        });
    });
})(jQuery, window, document);
