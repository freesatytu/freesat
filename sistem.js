$(function () {
    var URL = "http://localhost/freesat";
    
    $('#giris_tel').on('click', function(e){
        var formData = $('#giris-form1').serialize();
        $.post(URL + '/sistem/ajax.php', formData, function(response){
            var giris_form_error = $("#giris-form-error");
            var giris_form_success = $("#giris-form-success");
            if (response.error) {
                giris_form_success.hide();
                giris_form_error.text(response.error);
                giris_form_error.show();
            } else {
                giris_form_error.hide();
                giris_form_success.text(response.success);
                giris_form_success.show();
                $("#giris-form1").hide();
                $("#giris-form2").show();
            }
        }, 'json');
        e.preventDefault();
    });

    $('#giris_sif').on('click', function(e) {
        var formData = $("#giris-form2").serialize();
        $.post(URL + "/sistem/ajax.php", formData, function(response) {
            var giris_form_error = $("#giris-form-error");
            var giris_form_success = $("#giris-form-success");
            if (response.error) {
                giris_form_success.hide();
                giris_form_error.text(response.error);
                giris_form_error.show();
            } else {
                giris_form_error.hide();
                giris_form_success.text(response.success);
                giris_form_success.show();
                $("#giris-form1").hide();
                $("#giris-form2").show();
                window.location.href = URL;
            }
        }, 'json');
        e.preventDefault();
    });

});