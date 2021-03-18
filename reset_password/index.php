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
</style>
</head>
<script type="text/javascript">

// function check_pass() 
// {
// 	var pass = document.getElementById("password").value;
// 	// var pass_check = pass.length;
// 	errors = [];
// 	if (pass.length < 8) 
// 	{
// 		errors.push("Your password must be at least 8 characters long.");
// 		// document.getElementById("passerror").innerHTML = "Password must be greater than 6 characters.";
        
//   		// return false;
//     }
//     if(pass.search(/[a-z]/i) < 0)
//     {
//     	errors.push("Your password must contain at least one character.");
//     	// document.getElementById("passerror").innerHTML = "";
//     	// return true;
//     }
//     if (pass.search(/[0-9]/) < 0) {
//         errors.push("Your password must contain at least one digit.");
//     }
//     if (errors.length > 0) {

//         var err = errors.join("\n");
//     	document.getElementById("passerror").innerHTML = errors.length;
//         return false;
//     }
//     // else {
//     //  	document.getElementById("passerror").innerHTML = "";
//     //  	return true;
//     //  }
//     return true;
// }

// function check_confpass() 
// {
// 	var pass = document.getElementById("password").value;
// 	if(pass == ""){
// 		document.getElementById("passerror").innerHTML = "Please enter Password first.";
// 	}else{
// 		document.getElementById("confpasserror").innerHTML = "";
// 		var confpass = document.getElementById("confpassword").value;
// 		var pass_check = pass.length;
// 		if (confpass != pass) 
// 		{
// 			document.getElementById("confpasserror").innerHTML = "Password and confirm password not match.";
	        
// 	  		return false;
// 	    }else{
// 	    	document.getElementById("confpasserror").innerHTML = "";
// 	    	return true;
// 	    }
// 	}
	
// }


// function validate()
// {
// 	var newPassword 	= document.forms["myform"]["resetPassword"].value;
// 	var confirmPassword	= document.forms["myform"]["confirmPass"].value;

// 	if(newPassword == ""){
// 		alert("Please Enter Password");
// 		return false;
// 	}else if(confirmPassword == ""){
// 		alert("Please enter Cofirm Password");
// 		return false;
// 	}
// }


</script>
<body>
	<div class="container">
		<form class="form-horizontal" action="" name="myform" id="myform" method="post" enctype="multipart/form-data" onsubmit="return validate();">
			<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-3">
						<div class="form-group">
						<div class="reset_pass_sec">	
							<h1 style="font-size: 35px;">Reset Password</h1>
			          		<h5 style="font-size: 15px;">Please Enter New Password Below</h5>
			          		
					            <!-- <label class="control-label">Phone Number</label> -->
					            <!-- <input type="password" class="form-control" id="passworda" name="resetPassword" placeholder="New Password" onkeyup="check_pass()">
					            <div id="passerrora" style="color: red;"></div>
					            <input type="password" class="form-control" id="confpassworda" name="confirmPass" placeholder="Confirm Password" onkeyup="check_confpass()">
					        	<div id="confpasserrora" style="color: red;"></div> -->
					        	<input type="text" class="form-control" id="password" name="resetPassword" placeholder="New Password">
					            <div id="passerror" style="color: red;"></div>
					            <input type="password" class="form-control" id="confpassword" name="confirmPass" placeholder="Confirm Password">
					        	<div id="confpasserror" style="color: red;"></div>
					    	</div>
					      	<p id="p" class="error"></p>	
					      	<button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
					      	<!-- <input type="submit" value="Submit" class="submit"> -->
					        <!-- <button class="btn btn-primary btn-block btn-lg" onclick="myFunction();" type="button">NEXT</button>          -->
						</div>
					</div>
			</div>
		</form>
	</div>
	
<!-- Latest compiled JavaScript -->
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> -->


<script type="text/javascript">
$("#password").keyup(function(){
	
	// var pattern = /^.*(?=.{8,12}).*$/;
	// var pattern1 = /^.*(?=.*[@#$%&]).*$/;
	// var pattern2 = /^.*(?=.*[0-9]).*$/;
	// var pattern3 = /^.*(?=.*[a-z])(?=.*[A-Z]).*$/;

	// var userpassword = $('#password').val();
	// var errors = [];

	// if(!pattern.test(userpassword)){
 //        // return true;
 //        // alert("true");
 //        errors.push("Your password must be at least 8 characters long.");
 //        // $("#passerror").html("");
 //    }
 //    if(!pattern1.test(userpassword)){
 //        // return true;
 //        // alert("true");
 //        errors.push("Password must contain at least one special character.");
 //        // $("#passerror").html("");
 //    }
 //    if(!pattern2.test(userpassword)){
 //        // return true;
 //        // alert("true");
 //        errors.push("Password must contain at least one digit.");
 //        // $("#passerror").html("");
 //    }
 //    if(!pattern3.test(userpassword)){
 //        // return true;
 //        // alert("true");
 //        errors.push("Password must contain one uppercase and one lowercase character.");
 //        // $("#passerror").html("");
 //    }
 //    if(errors.length > 0)
 //    {
 //    	var err = errors.join("\n");
 //    	$("#passerror").html(err);
 //    }
    // else{
    //     // return false;
    //     // alert("false");
    //     $("#passerror").html("Password Should be 8 Character long, including Uppercase, lowercase, number and special characters.");
    // }

// $( "#password" ).rules( "add", {
//   required: true,
//   minlength: 8,
//   messages: {
//     required: "Required input",
//     minlength: jQuery.validator.format("Please, at least {0} characters are necessary")
//   }
// });
// $("#passerror").html(messages);

$("#myform").validate({
	// onkeyup: true,
  rules: {
    resetPassword: {
    	required: true,
    	minlength: 8,
    	// characters:  
    }    
  },
  messages: {
    resetPassword: {
      required: "Please Enter Your Password",
      minlength: jQuery.validator.format("At least {8} characters required!")
    }
  },
  onkeyup: function() { $("#passerror").html(messages); }
  
});


});
</script>



<!-- https://www.studentstutorial.com/jquery/jquery-check-password-strength.php
https://www.w3resource.com/javascript/form/password-validation.php
https://stackoverflow.com/questions/12090077/javascript-regular-expression-password-validation-having-special-characters -->

</body>
</html>



