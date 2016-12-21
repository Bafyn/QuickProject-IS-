<?php
    if(!defined("AIF"))
        header('Location:/login');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<meta charset="utf-8">
        <script type="text/javascript" src="../template/js/mainjs.js"></script>
        <link rel="stylesheet" type="text/css" href="../template/css/main.css">
</head>
<body>
<div class="wrapper">
	<form id="login_title" method="POST" action="">
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
        <?php 
            if($data['status_reg'])
        {
        ?>
        <div class="reg_to_log_true">Вы успешно зарегистрированы</div>
        <script type="text/javascript">
       	location.href = "/login";
        </script>
        <?php } ?>
        <?php
        	if(isset($data['error_log']))
        	{
        ?>
        <div class="login_error"><?php echo $data['error_log'] ?></div>
        <?php } ?>
		<div id="capture_text">Пожалуйста, введите число, которое Вы видите на картинке</div>
                <div id="capture_img"><img src="template/img/capture.jpg"></div>
		<div id="capture_input"><input type="text" name="capture" tabindex="3"></div>
		<button type="submit" tabindex="4">Войти</button>
		<a href="#">Восстановление пароля</a>
		<a href="#">Не пришло сообщение со ссылкой для активации аккаунта</a>
	</form>
</div>
</body>
</html>