<!-- <!Doctype html>
<html>
<body>
    <head>
        <style>
            #frmCheckPassword {
                border-top: #F0F0F0 2px solid;
                background: #808080;
                padding: 10px;
            }

            .demoInputBox {
                padding: 7px;
                border: #F0F0F0 1px solid;
                border-radius: 4px;
            }

            #password-strength-status {
                padding: 5px 10px;
                color: #FFFFFF;
                border-radius: 4px;
                margin-top: 5px;
            }

            .medium-password {
                background-color: #b7d60a;
                border: #BBB418 1px solid;
            }

            .weak-password {
                background-color: #ce1d14;
                border: #AA4502 1px solid;
            }

            .strong-password {
                background-color: #12CC1A;
                border: #0FA015 1px solid;
            }
        </style>
    </head>
    <div name="frmCheckPassword" id="frmCheckPassword">
        <label>Password:</label>
        <input type="password" name="password" id="password" class="demoInputBox" onKeyUp="checkPasswordStrength();" />
        <div id="password-strength-status"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function checkPasswordStrength() {
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            if ($('#password').val().length < 6) {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('weak-password');
                $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
            } else {
                if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                    $('#password-strength-status').removeClass();
                    $('#password-strength-status').addClass('strong-password');
                    $('#password-strength-status').html("Strong");
                } else {
                    $('#password-strength-status').removeClass();
                    $('#password-strength-status').addClass('medium-password');
                    $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
                }
            }
        }
    </script>
</body>
</html> -->


<!-- other code -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Start your development with a Laari Website for Bootstrap 4.4">
    <meta name="author" content="Creative Tim">
    <title>Reset Password</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
         $.validator.addMethod("specialChar", function(resetPassword, element) {
            resetPassword = resetPassword.replace(/\s+/g, "");
            var regularExpression = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$@%&?]{8,20}$/;
            //  /^[A-Za-z]\w{7,14}$/
            return resetPassword.match(regularExpression);
        }, "password should contain atleast one number and one special character");
            $("#myform").validate({
                rules:
                {
                    resetPassword: {
                        required: true,
                        minlength: 6,
                        specialChar:true
                    },
                    confirmPass: {
                        required: true,
                        equalTo: "#resetPassword"
                    },
                },
                messages: {
                    resetPassword: {
                        required: "Please Enter Your Password.",
                        minlength: "Password at least have 6 characters."
                    },
                    confirmPass: {
                        required: "Please Enter Confirm Password.",
                        equalTo: "Password not matched",
                    }
                }
            });
            $("#myform").submit(function(e){
            e.preventDefault();
            var form = $(this).serialize();
                $(this).validate();
                if (!$(this).valid()){
                  console.log("false");  
                }else{
                    var pass = $("#resetPassword").val();
                console.log(pass);    
                }
            
                
            })
            
        });
</script>
<style type="text/css">
body {
    margin-top: 40px;
    margin-bottom: 20px;
}
.container {
    margin-right: 15px;
    margin-left: 15px;
}
.form-control {
    margin-bottom: 10px;
}
#password-error {
    color:red;
}
#confpassword-error {
    color:red;
}
</style>
</head>
<script type="text/javascript">
</script>
<body>
    <div class="container">
        <form class="form-horizontal" id="myform">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <div class="reset_pass_sec">    
                            <h1 style="font-size: 35px;">Reset Password</h1>
                            <h5 style="font-size: 15px;">Please Enter New Password Below</h5>
                                <input type="password" class="form-control" id="resetPassword" name="resetPassword" placeholder="New Password">
                                <input type="password" class="form-control" id="confpassword" name="confirmPass" placeholder="Confirm Password">
                        </div>
                        <p id="p" class="error"></p>    
                        <input type="submit" value="Reset Password" class="btn btn-primary btn-block btn-lg" required />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>


