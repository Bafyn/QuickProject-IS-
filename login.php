<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/mainjs.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="wrapper">
	<form id="login_title">
		<h2>Вход</h2>
		<div class="login_parag_left">
			<label for="input_1" class="login_parag_left_float">Email</label>
		</div>
		<div class="login_input">
			<input type="email" name="email" tabindex="1" id="input_1" placeholder="example@gmail.com" required="required" >
		</div>
		<div class="login_parag_left ">
			<label for="input_2" class="login_parag_left_float">Пароль</label>
		</div>
		<div class="login_input">
			<input type="password" name="pwd" tabindex="2" id="input_2" required="required">
		</div>
		<div id="capture_text">Пожалуйста, введите число, которое Вы видите на картинке</div>
		<div id="capture_img"><img src="capture.jpg"></div>
		<div id="capture_input"><input type="text" name="capture" tabindex="3"></div>
		<button type="submit" tabindex="4">Войти</button>
		<a href="#">Восстановление пароля</a>
		<a href="#">Не пришло сообщение со ссылкой для активации аккаунта</a>
	</form>
</div>
</body>
</html>