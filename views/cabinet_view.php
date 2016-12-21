<head>
	<title>Личный кабинет</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="../template/js/mainjs.js"></script>
    <link rel="stylesheet" type="text/css" href="../template/css/main.css">
</head>
<body>
<div class="wrapper">
	<div id="cabinet">
		<div id="cabinet_first">
			<h2>Личный кабинет</h2>
			<div>Ваш баланс <span id="cabinet_first_bal">0 бонусов</span><img id="cabinet_first_bonus" src="../template/img/bonus.png" onMouseMove='document.getElementById("drop_down_menu").style.display = "block"' onMouseOut = 'document.getElementById("drop_down_menu").style.display = "none"'> 
				<ul class="settings_menu" id="drop_down_menu" onMouseMove='document.getElementById("drop_down_menu").style.display = "block"' onMouseOut = 'document.getElementById("drop_down_menu").style.display = "none"'>
		            <li class="settings_m_item"><a href="" class="gl_link">Изменить данные</a></li>
		            <li class="settings_m_item"><a href="" class="gl_link">Изменить e-mail</a></li>
		            <li class="settings_m_item"><a href="" class="gl_link">Изменить пароль</a></li>
		       	    <li class="settings_m_item"><a href="" class="gl_link">Прекратить участие</a></li>
	        	</ul>
			</div>
		</div>
		<div id="cabinet_third">
			Вы - абитуриент
				<div id="way" style="align-self: flex-start;margin-left: 15px;">
				
				<span>
				    <b style="width:0%">0&nbsp;/&nbsp;50</b>
					<i>Студент</i>
			  </span>
			</div>
		</div>
		<h2 style="font-size: 23px;font-weight: 600;margin-top: 10px;">Ваши достижения</h2>
	</div>
</div>
</body>