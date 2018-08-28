$(function(){
    $.validator.setDefaults({
        errorElement: 'span',
        errorClass: 'form-error',
        highlight: function(element) {
            $(element).parent("div").addClass('error');
        },
        unhighlight: function(element) {
            $(element).parent("div").removeClass('error');
        },
        focusCleanup: true,
        rules: {
            name: "required",
            email: {
                required : true,
                email : true
            }
        },
        messages:{
            name: "Please, fill in your name",
            email: {
                email: "Oops! That's not a valid email",
                required: "Please, fill in your email address"
            }
        }
    });

    $('#form-contact').validate({
        rules: {
            description: "required"
        },
        messages:{
            description: "Oops! Don't forget to leave us a message"
        },
        submitHandler: submitContact
    });

    $('#form-mvp').validate({
        rules: {
            description: "required",
        },
        messages:{
            description: "Please, give us a brief summary of your idea"
        },
        submitHandler: submitMVP
    });

    $('#form-contact input').change(function(){
        $('#form-contact').validate();
    });

    $('#form-mvp input').change(function(){
        $('#form-mvp').validate();
    });
});

function submitContact(){
    $('.fa-spinner').removeClass('hidden');
    $('.submit-form').attr('disabled', true);
    var data = $('#form-contact').serialize();
    $.post("contact.php", data,
        function (response) {
            $('.form-message-wrapper').removeClass('hidden success error').show();
            if(response.status == 'success'){
                $('.form-message-wrapper').addClass('success');
                $('.form-message').text(response.message);
				$('#form-contact').find("input[type=text], input[type=tel], input[type=email], textarea").val("");
            }else{
                $('.form-message-wrapper').addClass('error');
                $('.form-message').text(response.message);
            }
            $('.form-message-wrapper').delay(3000).fadeOut('fast');
            $('.fa-spinner').addClass('hidden');
            $('.submit-form').attr('disabled', false);
        },
        "json"
    );
}

function submitMVP(){
    $('#type').val('mvp');
    $('.mvp.fa-spinner').removeClass('hidden');
    $('.submit-form.mvp').attr('disabled', true);
    var data = $('#form-mvp').serialize();
    $.post("contact.php", data,
        function (response) {
            $('.mvp.form-message-wrapper').removeClass('hidden success error').show();
            if(response.status == 'success'){
                $('.mvp.form-message-wrapper').addClass('success');
                $('.mvp.form-message').text(response.message);
				$('#form-mvp').find("input[type=text], input[type=tel], input[type=email], textarea").val("");
            }else{
                $('.mvp.form-message-wrapper').addClass('error');
                $('.mvp.form-message').text(response.message);
            }
            $('.mvp.form-message-wrapper').delay(3000).fadeOut('fast');
            $('.mvp.fa-spinner').addClass('hidden');
            $('.mvp.submit-form').attr('disabled', false);
        },
        "json"
    );
}
