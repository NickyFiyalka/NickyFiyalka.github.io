<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Music Festival - сайт про фестивалі</title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/main_page.css">
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
						<h2 class="heading">IT новини</h2>
						<div style="clear: both"><br></div>
						<!-- Стаття -->
						<?php
							for ($i=0; $i < 6; $i++)
								echo '
							<div class="article">
										<img src="http://pro-club.org/images/vue-js/vuejs-cover.png" alt="Картинка" title="Картинка vue-js">
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit velit atque sint aliquam voluptatem</span>
							</div>
							';
						?>
						<a href="" title="Переглянути більше статтей">
							<div class="btn">
								Переглянути більше
							</div>
						</a>
					</div>
				</div>
				<aside>
					<div id="courses"></div>
					<h2 class="heading">Відеокурси</h2>
					<div style="clear: both"><br></div>
					<!-- Курс -->
					<?php
					for ($i=0; $i < 4; $i++)
					echo '
					<div class="course">
								<img src="https://3dgame-creator.ru/wp-content/uploads/2016/02/unity5-e1455684107163.jpg" alt="Картинка" title="Картинка vue-js">
									Створення IOS гри на Unity
									<span>25 уроків</span>
									<div style="clear: both"><br></div>
					</div>
					';
					?>
					<a href="" title="Переглянути більше відеоуроків">
						<div class="btn">
							Всі відеокурси
						</div>
					</a>
					<div id="one_course">
						<h2 class="heading">Як зробити IOS гру?</h2>
						<div style="clear: both"><br></div>
						<img src="https://3dgame-creator.ru/wp-content/uploads/2016/02/unity5-e1455684107163.jpg" alt="Реклама курсу">
					</div>
				</aside>
				<div style="clear: both"><br></div>		
			</div>
			<?php
				require_once "blocks/footer.php";
			?>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>