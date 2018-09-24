
(function ($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;
        var image = "";
        var dataJson;
        /*for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }*/
        if(check ==true){
            $.ajax({
            type: 'post',
            url: 'ChomSao.php',
            data: $('form').serialize(),
            success: function (data) {
                dataJson = JSON.parse(data);
                //var obj = JSON.parse('{ "name":"Ma Kết", "image"="Capricorn", "time"="23/12 - 19/01"}');
                //alert(dataJson.name);
                //$('#dialog').html('<p>' + dataJson.name + ' (<span>' + dataJson.time + '</span>)</p>');
                // image = dataJson.image;
                $('#imageResult').attr('src', "images/" + dataJson.image + ".jpg");
                $('#imageResult').attr('alt', dataJson.image);
                // $( "#dialog p").val(dataJson.name);
                // $( "#dialog span").val(dataJson.time);
            }
            });
        
        // $('#imageResult').attr('src', "images/" + image + ".jpg");
        // $('#imageResult').attr('alt', dataJson.image);
        // $( "#dialog p").val(dataJson.name);
        // $( "#dialog span").val(dataJson.time);
        }
        // return check;
    });

    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('fa-eye');
            $(this).find('i').addClass('fa-eye-slash');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').removeClass('fa-eye-slash');
            $(this).find('i').addClass('fa-eye');
            showPass = 0;
        }
        
    });
    

})(jQuery);