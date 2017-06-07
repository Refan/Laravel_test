<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
  
  {!!Html::style('/assets/css/login.css')!!}
  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<div class="logo_img"><img src="/images/logo.png" width="300"></div><!--300*100-->
		<h1>Welcome</h1>
		<form id="form" class="form" method="POST" action="">
			<input type="text" placeholder="Username">
			<input type="password" placeholder="Password">
			<button class="g-recaptcha" data-sitekey="6Le0eCQUAAAAAHyEKFXoYyBl8JKolgt5iFWtfRVe" data-badge="inline" data-callback="onSubmit">Login</button>
			<!--<button type="submit" id="login-button">Login</button>-->
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    {!!Html::script('/assets/js/jquery-1.10.2.js')!!}

	<script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
	function onSubmit(token) {
		$('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
		setTimeout(function() {
			document.getElementById("form").submit();
		}, 1500);
	}
    </script>

</body>
</html>
