$(document).ready(function(){

	$("#btn_sub").click(function(e){
		e.preventDefault();
			var error =0;
			$("#first_name"=="")
			{
				errror=1;
				$(".name_error").html("Please Enter Your Name");
			}

			$("#last_name"=="")
			{
				errror=2;
				$(".last_name").html("Please Enter Your Name");
			}

			$("#email"=="")
			{
				errror=3;
				$(".email_error").html("Please Enter Your Name");
			}

			$("#phone"=="")
			{
				errror=4;
				$(".phone_error").html("Please Enter Your Name");
			}

			$("#password"=="")
			{
				errror=5;
				$(".password_error").html("Please Enter Your Name");
			}

			if (error==0){
			$("#signup_form").submit();
		}
	})
});