<!DOCTYPE html>
<html>
<head>
	<link href="../template/css/main.css" rel="stylesheet" type="text/css">
	<script src="mainjs.js"></script>
</head>
<body>
<div class="header_container">
	<header class="header">
		<nav class="nav_menu clearfix">
			<a href="" class="logo">
				<img src="../template/img/logo.png" width="200px" height="50px" alt="Крутой сайт">
			</a>

			<div></div>

			<ul class="main_menu">
				<li class="main_menu_item">
					<a href="" class="main_menu_item_link">
						<span class="main_menu_item_text">О проекте</span>
					</a>
				</li>
				<li class="main_menu_item">
					<a href="" class="main_menu_item_link">
						<span class="main_menu_item_text">Пункт меню</span>
					</a>
				</li>
				<li class="main_menu_item">
					<a href="" class="main_menu_item_link">
						<span class="main_menu_item_text">Пункт меню</span>
					</a>
				</li>
				<li class="main_menu_item">
					<a href="" class="main_menu_item_link">
						<span class="main_menu_item_text">Помощь</span>
					</a>
				</li>
                <?php
                if(isset($_COOKIE['id'])&&isset($_COOKIE['Hash'])){
                                ?>
                <li class="main_menu_item">
                    <a href="cabinet" class="main_menu_item_link">
                        <span class="main_menu_item_text">Личный кабинет</span>
                    </a>
                </li>
                    <li class="main_menu_item">
                        <a href="logout" class="main_menu_item_link">
                            <span class="main_menu_item_text">Выход</span>
                        </a>
                    </li>
                 <?php } else{ ?> 
				<li class="main_menu_item">
					<a href="signup" class="main_menu_item_link">
						<span class="main_menu_item_text">Регистрация</span>
					</a>
				</li>
				<li class="main_menu_item">
					<a href="login" class="main_menu_item_link">
						<span class="main_menu_item_text">Вход</span>
					</a>
				</li>
                                <?php } ?>
			</ul>
		</nav>
	</header>

	<div class="main_slider inner_mod">
        <ul class="header_line clearfix">
        	<li class="header_l_item header_l_item_blue"></li>
            <li class="header_l_item header_l_item_blue_2"></li>
            <li class="header_l_item header_l_item_green"></li>
            <li class="header_l_item header_l_item_blue_3"></li>
            <li class="header_l_item header_l_item_olive"></li>
            <li class="header_l_item header_l_item_blue"></li>
        </ul>
        <div class="slider_wrapper">
            <div class="slide">
                <div>
                	<span class="site_info_header">Название сайта</span>
                </div>
                <img src="../template/img/main_header.jpg" class="slide_img max_w_mod mob_only">
            </div>
        </div>
    </div>
</div>
</body>
</html>