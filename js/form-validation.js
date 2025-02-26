$('document').ready(function() {
    var errorSound = new Audio('https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233563/error.mp3');
       errorSound.volume = 1;
    var successSound = new Audio('https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233524/success.mp3');
       successSound.volume = 1;
    /* handle form validation */
    $("#contactForm").validate({
        ignore: ".ignore",
        rules: {
            'your-name': {
                required: true,
                minlength: 2
            },
            
            'your-email': {
                required: true,
                email: true
            },
            'your-number':{
                required:true,
                minlength:10,
                maxlength:10
            },
            'your-destionation': {
                required: true,
                minlength: 2
            },
            'your-message': {
                required: true,
                minlength: 20
            },     
       hiddenRecaptcha: {
                required: function () {
                    if (grecaptcha.getResponse() === '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        },
        errorElement: "span",
        errorClass: "error text-danger",
        messages: {
            name: { minlength: "Name at least 4 characters" },
            email: { email: "please enter a valid email address" },
            mobile: { minlength: "please enter a valid phone number" },
            mobile: { maxlength: "please enter a valid phone number 10 digits" },
        },
        submitHandler: submitForm
    });
    function submitForm() {
        var data = $("#contactForm").serialize();
        $.ajax({
            type: 'POST',
            url: './js/DoAction.php',
            data: data,
            beforeSend: function() {
                $("#btn-contact").css('cursor', 'progress');
                $("#btn-contact").attr('disabled','true');
                $("#btn-contact").html(' <span class="spinner-grow spinner-grow-sm"></span> Sending..');
            },
            complete: function(){
                $("#btn-contact").html('Submit');
                $("#btn-contact").css('cursor', 'pointer');
                $("#btn-contact").removeAttr('disabled');
            },
            success: function(data) {
                if (data.status === 'error') {
                    $("#btn-contact").html('Submit');
                    $("#btn-contact").css('cursor', 'pointer');
                    $("#btn-contact").removeAttr('disabled');
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        html: data.message,
                    }).then(okay => {
                        if (okay) {
                        }
                    });
                } else if (data.status === 'success') {
                        successSound.play();
                        $("#btn-contact").html('Submit');
                        $("#btn-contact").css('cursor', 'pointer');
                        $("#btn-contact").removeAttr('disabled');
                        document.getElementById("contactForm").reset();
                        localStorage.setItem('currentURL', data.redirecturl );
                        Swal.fire({
                            icon: 'success',
                            title: "Success",
                            showConfirmButton: false,
                            timer: 5000
                          });
                        setTimeout(thankYou,5000);
                } else {
                        $("#btn-contact").html('Submit');
                        $("#btn-contact").css('cursor', 'pointer');
                        $("#btn-contact").removeAttr('disabled');
                        Swal.fire({
                            icon: 'error',
                            title: "Error",
                            html: +data.message,
                            timer: 2000
                        }).then(okay => {
                            if (okay) {
                            }
                        });
                }
                function thankYou() {
                    window.location.replace("thank-you.php");
                }
            }
        });
        return false;
    }              
});