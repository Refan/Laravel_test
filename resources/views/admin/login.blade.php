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
		<h1>Welcome</h1>
		
		<form class="form">
			<input type="text" placeholder="Username">
			<input type="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
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

    <script>
    $("#login-button").click(function(event){
        event.preventDefault();
        
        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
    });
    </script>

</body>
</html>
