//AJAX call for signup form 
$("#signUpForm").submit(function(event){
			//Prevent default php processing
	event.preventDefault();
			//Get the credentials from sign up form
	var datatopost = $(this).serializeArray();
	console.log(datatopost);
			//send them to signup.php
	$.ajax({
		url: "signup.php",
		type: "POST",
		data: datatopost,
	})
	.done(function(data) {
		if(data){
			$("#signUpMessage").html(data);
					//$("#signUpModal").hide();


		}
	})
	.fail(function() {
		$("#signUpMessage").html("<div class='alert alert-danger'> Some Error Occured. Pls Try Again Later. </div>")
	})
	.always(function() {
		console.log("complete");
	});

			
});
$("#loginForm").submit(function(event){
	//Prevent default php processing
	event.preventDefault();
	//Get the credentials from sign up form
	var datatopost = $(this).serializeArray();
	console.log(datatopost);
	//send them to signup.php
	$.ajax({
		url: "login.php",
		type: "POST",
		data: datatopost,
	})
	.done(function(data) {
		console.log(data);
		console.log(typeof data);
		//var str1 = data;
		//str1.replace(/\s+/g, " ").replace(/^\s|\s$/g, "");
		//console.log(str1);
		//var str2 = "&nbspSuccess";
		//console.log(str2);
		//var x = str1.localeCompare(str2);
		//console.log(x);
		if(data == 1){
			//$('#loginMessage').html("check");
			//console.log(typeof data);
			window.location.assign('main.php');
		}else{
			$("#loginMessage").html(data);
		}
	})
	.fail(function() {
		$("#loginMessage").html("<div class='alert alert-danger'> Some Error Occured. Pls Try Again Later. </div>")
	})
	.always(function() {
		console.log("complete");
	});
	
});	
	