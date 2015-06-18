$(document).ready(function(){
	var test_user,
		test_email,
		test_password;
	$(".register #register").click(function(e) {
		// variables
		var username = $("#r_username").val(),
			password = $( "#r_password").val(),
			email = $("#r_email").val(),
			minlen = 4,
			pat = /[a-zA-Z\d_]+@{1}[a-zA-Z]+\.{1}[a-zA-Z]{2,}/g,
			execs = pat.exec(email),
			bubbler = function(element, message) {
				$("#bubble").remove();
				$(".register .warn_wrapper").fadeOut("fast");
				$("<div id='bubble'>"+message+"</div>").insertAfter($(".register " +element).next());
				$(".register #bubble").slideDown("fast");
				};
				if( test_user ==="ok" && test_email==="ok" && test_password === "ok"){
						window.location.replace("main.php");	
				}	
				if( !username && !password && !email ){
					$(".super, .super1, #bubble").fadeOut("fast", function(){$(this).remove();});
					$(".register .warn_wrapper").fadeIn("fast");

					return e.preventDefault(e);	
				}
				else{
					$(".register .warn_wrapper").fadeOut("fast");
				}
				if( username.length < minlen){
					bubbler("#r_username", "min 4 symbols");
					return e.preventDefault(e);
				}	
				if( password.length < minlen ){
					bubbler("#r_password", "min 6 symbols");
					return e.preventDefault(e);
				}
				if( email === '' || execs === null  ){
					bubbler("#r_email", "not correct address ");
					return e.preventDefault(e);
				}
				else {
					$(".register #bubble").slideUp("fast", function(){$(this).remove();});
					return e.preventDefault(e);	
				}
	});
		$(".warn_wrapper").click(function(){
			$(this).fadeOut("fast");
		});
	$("#r_username").keyup(function(){
	$(".register .warn_wrapper").fadeOut("fast");
		var username = $("#r_username").val();
			$.post('checkName.php', {username:username}, function(data) {
				if (data === "yes" && username.length > 4){
					$("#super").remove();
					$("<i id='super' class='fa fa-check'></i>").insertAfter($("#r_username"));
					test_user="ok";
					$("#bubble").slideUp("fast", function(){$(this).remove();});
				}
				if (data === "no" || username.length < 4) {
					$("#super").remove();
					$("<i id='super' class='fa fa-close'></i>").insertAfter($("#r_username"));
				}
				if (username === ''){
					$("#super").remove();
					$("<i id='super' class='super fa fa-close'></i>").insertAfter($("#r_username"));
				}
			});
		});	
		
	$("#r_password").keyup(function(){
		$(".register .warn_wrapper").fadeOut("fast");
		if ($("#r_password").val().length < 6){
				$(".super1").remove();
				$("<i class='super1 fa fa-close'></i>").insertAfter($("#r_password"));
		}
		else{
			$(".super1").remove();
			$("<i class='super1 fa fa-check'></i>").insertAfter($("#r_password"));
			$("#bubble").slideUp("fast", function(){$(this).remove();});
			test_password="ok";
		}
	});
	$("#r_email").keyup(function(){
	$(".register .warn_wrapper").fadeOut("fast");
		var email =$("#r_email").val();
		var pat=/[a-zA-Z\d_]+@{1}[a-zA-Z]+\.{1}[a-zA-Z]{2,}/g;
		var execs = pat.exec(email);
		
			
		if (execs === null || email === ''){
				$(".super2").remove();
				$("<i class='super2 fa fa-close'></i>").insertAfter($("#r_email"));
		}
		else{
			$(".super2").remove();
			$("<i class='super2 fa fa-check'></i>").insertAfter($("#r_email"));
			$("#bubble").slideUp("fast", function(){$(this).remove();});
			test_email="ok";
		}	
	});
	$(".clean_register_form").click(function(){
		$(".register [type=text], [type=password]").val('');
	});
});
