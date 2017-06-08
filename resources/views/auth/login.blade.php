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
		<div class="logo_img"><!--300*100-->
			{!!Html::image('/images/logo.png')!!}
			<!--<img src="/images/logo.png" width="300">-->
		</div>
		<h1>Welcome</h1>
		<form id="form" class="form" method="POST" action="{{URL::route('login')}}">
            {!! csrf_field() !!}
			<input type="email" placeholder="Username" name="email" value="{{ old('email') }}">
			<input type="password" placeholder="Password" name="password" id="password">
			<button class="g-recaptcha" data-sitekey="6Le0eCQUAAAAAHyEKFXoYyBl8JKolgt5iFWtfRVe" data-badge="inline" data-callback="onSubmit">Login</button>
			<!--
			<button type="submit" id="login-button">Login</button>
			-->
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
