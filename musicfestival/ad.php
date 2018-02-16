<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Реклама на сайті</title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/aside.css">
		<link rel="stylesheet" href="css/fontawesome-all.css">
		<meta name="description" content="">  <!-- Добавити описання до сайту (урок2 13.30) -->
		<meta name="keywords" content=""> <!-- Добавити ключові слова -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  href="img/favicon.png" rel="shortcut icon" type="image/x-icon"> <!-- Добавити іконку до сайту (урок2 15.00) -->
	</head>
	<body>
		<div id="wrapper">
			<div id="content">
				<?php
				require_once "blocks/header.php";
				?>
				<div id="main">
					<div id="news">
						<h2 class="heading">Реклама</h2>
						<div style="clear: both"><br></div>
						<div class="block">
							З питань реклами звертайтеся по email. Для цього необхідно заповнити форму та відправити нам повідомлення.<br><br>
							Реклама вашого товару/проекту/компаниії може бути на одній із наших сторінок чи декількох. <br><br>
							<strong>Рекламні сторінки:</strong>
							<ul>
								<li>Інформаційно розважальний портал - <a href="https://itproger.com" target="_blank">itProger</a></li>
								<li><noindex><a href="https://www.youtube.com/user/PlurrimiTube" rel="nofollow" target="_blank">YouTube канал</a></noindex></li>
								<li><noindex><a href="https://vk.com/prog_life" rel="nofollow" target="_blank">Група Вконтакті</a></noindex></li>
							</ul><br>
							<strong>Види реклами:</strong><br>
							<a href="https://itproger.com" target="_blank">itProger</a>:
							<ul>
								<li>Написання рекламної статті та розміщення її на ресурсі;</li>
								<li>підготовка та публікація рекламних банерів на сайті;</li>
								<li>розміщення вічних посилань на ваш проект.</li>
							</ul><br>
							<noindex><a href="https://www.youtube.com/user/PlurrimiTube" rel="nofollow" target="_blank">YouTube канал</a></noindex>:
							<ul>
								<li>невелике рекламний ролик на початку/в середині/вкінці відео;</li>
								<li>рекламний ролив на початку та вкінці відео;</li>
								<li>повноцінний ролик на 5 або 10 хвилин;</li>
								<li>посилання на ваш проект под найпопулярнішими відео роликами;</li>
								<li>посилання на ваш проект в шапці каналу.</li>
							</ul><br>
							<noindex><a href="https://vk.com/prog_life" rel="nofollow" target="_blank">Група Вконтакті</a></noindex>: розміщення рекламного посту<br><br>
							Рекламу можно комбінувати і отримувати додаткові скидки! З питань реклами звертайтеся до нас через форму внизу:
						</div>
					</div>
					<div style="clear: both"><br></div>
					
				</div>
				<?php
					require_once "blocks/aside.php";
				?>
				<?php
					require_once "blocks/footer.php";
				?>
			</div>
			<script src="js/jquery-3.3.1.min.js"></script>
			<script src="js/script.js"></script>
		</body>
	</html>