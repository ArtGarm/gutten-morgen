function validate(form, options){

    var setings = {
        errorFunction:null,
        submitFunction:null
    }
    $.extend(setings, options);

    var $form = $(form);

    if ($form.length && $form.attr('novalidate') === undefined) {
        $form.on('submit', function(e) {
            e.preventDefault();
        });

        $form.validate({
            errorClass : 'errorText',
            focusCleanup : true,
            focusInvalid : false,
            invalidHandler: function(event, validator) {
                if(typeof(setings.errorFunction) === 'function'){
                    setings.errorFunction();
                }
            },
            errorPlacement: function(error, element) {
                error.appendTo( element.closest('.form_input'));
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('error');
                $(element).closest('.form_row').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('error');
                $(element).closest('.form_row').removeClass('error');
            },
            submitHandler: function(form) {
                if( typeof(setings.submitFunction) === 'function' ) {
                    setings.submitFunction(form);
                } else {
                    form.submit();
                }
            }
        });

        $('[required]',$form).each(function(){
            $(this).rules( "add", {
                required: true,
                messages: {
                    required: "Вы пропустили"
                }
            });
        });

        if($('[type="email"]',$form).length) {
            $('[type="email"]',$form).rules( "add",
            {
                messages: {
                    email: "Невалидный email"
                 }
            });
        }

        if($('.tel-mask[required]',$form).length){
            $('.tel-mask[required]',$form).rules("add",
            {
                messages:{
                    required:"Введите номер мобильного телефона."
                }
            });
        }
    }
}


function validationCall(form){

  var thisForm = $(form);
  var formSur = $('.call-form').serialize();

    $.ajax({
        url : thisForm.attr('action'),
        data: formSur,
        method:'POST',
        success : function(data){
            if ( data.trim()!='true') {
                thisForm.trigger("reset");
                popNext();
            }
            else {
               $(this).trigger('reset');
            }

        }
    });

    function popNext(){
    $.fancybox.open("#call_success",{
        padding:0,
        fitToView:false,
        wrapCSS:"call-popup",
        autoSize:true,
        afterClose: function(){
            clearTimeout(timer);
        }
    });
    var timer = null;

    timer = setTimeout(function(){
        $.fancybox.close("#call_success");
    },2000);
    $('form').trigger("reset");
	}
}


$(document).ready(function() {

	validate('.form-top', {submitFunction:validationCall});
	validate('.form-bottom', {submitFunction:validationCall});
    validate('.call-form', {submitFunction:validationCall});

    inputNumber($('.phone'));

    $('.fancybox_popup').fancybox({
        padding:0,
        fitToView:false,
        autoSize:true,
        wrapCSS:"call-popup"
    });

});