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
		var url = "http://laatri.com/reset_password/2/5fc0fbcfcab1185e4a21e975";

		$.validator.addMethod('mypassword', function(value, element) {
        return this.optional(element) || (value.match(/[a-z]/) && value.match(/[A-Z]/) && value.match(/[0-9]/) && value.match(/[@#$%&]/));
    },
    'Password must contain at least one numeric and one alphabetic character.');

		$(document).ready(function () {
			// var url=window.location.href;
			var token = url.split('/')[5];
			var tokentype = url.split('/')[4];

			console.log(token + " "+tokentype);
			$("#myform").validate({
				rules:
				{
					resetPassword: {
						required: true,
						minlength: 8,
						  mypassword: true
					},
					confPassword: {
                        required: true,
                        equalTo: "#resetPassword"
                    }
				},
				messages: {
					resetPassword: {
						required: "Please Enter Your Password.",
						minlength: "Password at least have 8 characters long.",
						mypassword: "Password should contain at least 1 upperCase, lowerCase, Number, and special character."
					},
					confPassword: {
						required: "Please Enter Confirm Password.",
						equalTo: "Password not matched."
					}

				}			
			});		
			$("#myform").submit(function(e){
			e.preventDefault();
				var pass = $("#resetPassword").val();
				console.log(pass);
				// var data = {"password": pass, "tokenType": tokentype, "token": token }
				// $.ajax({url: "demo_test.txt", success: function(result){
				$.ajax({
				  type: "POST",
				  url: 'http://laatri.com/v1/auth/change_password',
				  data: {password: pass, tokenType: tokentype, token: token },
				  // dataType: JSON,
				  success: function(res){
				  	console.log(res);
				  	if(res.msg == 'Success.'){
				  		$(".success_msg").html("Your Password Has Been Changed Successfully.");
				  	}else{
				  		$(".error_msg").html(res.msg);
				  	}
				  }
				});

			});	
		});

// $('#myform').submit(printObj);

// function printObj(e) {
//    e.preventDefault();
//   var obj = {
//     name: $('input[name=resetPassword]').val(),
//     email: $('input[name=confirmPass]').val(),
//   }
//   alert(obj);
//   // console.log(obj);
// }


// $("#myform").on("submit", function(e){
// 	e.preventDefault();
// 	var pass = $("#resetPassword").val();
// 	console.log(pass);
// 	var data = {"password": pass, "tokenType": tokentype, "token": token };
// 	console.log(data);

	// $.ajax({
	//   type: "POST",
	//   url: 'http://54.38.22.77:3000/v1/auth/change_password',
	//   data: data,
	//   success: function(res),
	//   dataType: JSON
	// });

	// alert(pass);
// });
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
.success_msg {
    font-size: 20px;
    color: green;
    text-align: center;
    margin: 5px;
}
.error_msg {
    font-size: 20px;
    color: red;
    text-align: center;
    margin: 5px;
}
.change_password_sec .form-group {
    margin-right: 0px;
    margin-left: 0px;
}
.change_password_sec {
    background-color: #ececec;
    border: 1px solid #ececec;
    border-radius: 10px;
    /*box-shadow: 0 8px 6px -6px black;*/
    box-shadow: 0 0 10px;
    /*box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;*/
}
.reset_pass_sec {
    margin-top: 40px;
}
.reset_pass_sec h1, .reset_pass_sec h5, .reset_pass_sec img {
    text-align: center;
}
#resetPassword-error, #confPassword-error {
    color: red;
    font-weight: normal;
    margin-bottom: 20px;
}
.logo_img {
    text-align: center;
}
</style>
</head>
<script type="text/javascript">
</script>
<body>
	<div class="container">
		<form class="form-horizontal" action="" name="myform" id="myform" method="post">
			<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-4 change_password_sec">
						<div class="form-group ">
							<div class="reset_pass_sec">	
								<div class="logo_img">
									<img src="laari_logo.png">
								</div>
								<h1 style="font-size: 30px; color: #1958E0;">Reset Password</h1>
				          		<h5 style="font-size: 15px;">Please Enter New Password Below</h5>
				          		<input type="password" class="form-control" id="resetPassword" name="resetPassword" placeholder="New Password">
						        <input type="password" class="form-control" id="confPassword" name="confPassword" placeholder="Confirm Password">
						    	<input type="submit" value="Reset Password" class="btn btn-primary btn-block"/>
						    </div>
						    <div class="error_msg"></div>	
						    <div class="success_msg"></div>
						</div>
					</div>
			</div>
		</form>
	</div>
</body>
</html>

<!-- https://forum.jquery.com/topic/changing-password-validation-to-check-for-atleast-one-character-and-one-number -->
<!-- https://www.w3resource.com/javascript/form/password-validation.php
https://www.studentstutorial.com/jquery/jquery-check-password-strength.php -->

<!-- https://getcssscan.com/css-box-shadow-examples -->