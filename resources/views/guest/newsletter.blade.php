<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        .contact-form-wrapper {
            margin:50px auto;
            width: 600px;
            .title {
                margin-bottom:30px;
            }
            h1 {
                font-size:18px;
                text-transform: uppercase;
                font-weight:bold;
            }
            p {
                font-size:14px;
                color: #777;
            }
        }
        .contact-form {
            input {
                border-radius:0;
                height:50px;
                font-size:12px;
                color:#999;
            } 
            textarea {
                border-radius:0;
                font-size:12px;
                color:#999;
            }
            .submit-button {
                background: #00AEEF;
                color:#fff;
                font-size:12px;
                text-transform:uppercase;
                font-weight:bold;
                letter-spacing:1px;
            }
        }
        @media (max-width: 480px) {
            body{
                width: 100%;
                padding: 10px;
            }
            .contact-form-wrapper{
                width: 100%;
            }
            .submit-button {
                margin-top: 10px;
                width: 100%;
            }
            .trixy {
                height: 200px;
            }
        }
    </style>
    <title>Exodus</title>
</head>
<body>
    <div class="contact-form-wrapper">
        <div class="title">
          <h1>Send Mail.</h1>
           <p>
                You can send mails to various emails using this form.
            </p>
        </div>
       
        <form id="contact-form" class="contact-form" method="post" role="form">
            <div class="form-group">
                <input type="email" placeholder="Email" class="form-control" name="email" id="email" required >
            </div>
        
            <div class="form-group">
                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
            </div>

            <input id="x" type="hidden" name="message">
            <trix-editor class="trixy" input="x"></trix-editor>
        
            <div id="submit" class="">
                <input type="submit" id="contact-submit" class="btn btn-default submit-button" value="Send Message">
            </div>
        </form>
       
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

    <script>
        (function($) {
                $(".contact-form").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        subject: {
                            required: true,
                            minlength: 2
                        },
                        message: {
                            required: true,
                            minlength: 2
                        }
                    },
                    messages: {
                        email: {
                            required: "no email, no support"
                        },
                        subject: {
                            required: "you have a reason to contact, write it here",
                            minlength: "thats all? really?"
                        },
                        message: {
                            required: "um...yea, you have to write something to send this form.",
                            minlength: "thats all? really?"
                        }
                    },
                    submitHandler: function(form) {
                        $(form).ajaxSubmit({
                            type:"POST",
                            data: $(form).serialize(),
                            url:"/app/admin/newsletter",
                            success: function() {
                                alert('success');
                                $(".contact-form").resetForm();
                                $(".success").slideDown("slow");
                            },
                            error: function() {
                                alert('error');
                                $(".error").slideDown("slow");
                            }
                        });
                    }
                });    
            })(jQuery);
    </script>
</body>
</html>