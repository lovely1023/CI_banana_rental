<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bananacampers Administrator sign in">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <title>Admin Sign in</title>  
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">  
  <link href="./assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <link href="./assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />  
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/style-responsive.css" rel="stylesheet">  
</head>
<body>  
	<div id="login-page">
		<div class="container">
		<div class="form-login" >
			<h2 class="form-login-heading">Welcome</h2>
			<div class="login-wrap">
				<input type="text" class="form-control" id="email" placeholder="Admin Email" autofocus>
				<br>
				<input type="password" class="form-control" id="password" placeholder="Password">
				<br><br>
				<button class="btn btn-theme btn-block" onclick="signin()" >
					<i class="fa fa-lock"></i> SIGN IN</button>
			</div>
		</div>
		</div>
	</div>
  
	<script src="./assets/lib/jquery/jquery.min.js"></script>
	<script src="./assets/lib/bootstrap/js/bootstrap.min.js"></script>
	
	<script>
		function signin(){
			var email = $('#email').val();
			var password = $('#password').val();
			if(email==''){ $('#email').focus();return; }
			else if(password==''){ $('#password').focus();return; }

			$.post(
				'./index.php/Admin_C/signin',
				{
					email:email,
					password:password
				},
				function(data){
					if(data=="no_admin"){
						$('#email').val('');
						$('#email').focus();
						$('#password').val('');
					}else if(data=="wrong_password"){
						$('#password').val('');
						$('#password').focus();
					}else if(data == "success"){
						window.location.href = './index.php/Admin_C/admin_first';
					}
				}
			);
		}
	</script>
</body>

</html>
