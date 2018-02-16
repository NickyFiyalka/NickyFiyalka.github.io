<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Зворотній зв'язок - Music Festival</title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/aside.css">
		<link rel="stylesheet" href="css/form.css">
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
						<h2 class="heading">Зворотній зв'язок</h2>
						<div style="clear: both"><br></div>
						<div class="block">
							Щоб відправити нам ваше повідомлення заповніть форму та відправте нам!
							<form method="POST">
								<div>
									<input type="text" id="name" placeholder="Ваше ім'я" onclick="$(this).css ('border-color', '#ccc')">
									<br>
									<input type="email" id="email" placeholder="Email.." onclick="$(this).css ('border-color', '#ccc')">
								</div>
								<div>
									<textarea id="message" placeholder="Введіть ваше повідомлення" onclick="$(this).css ('border-color', '#ccc')"></textarea>
								</div>
								<input type="button" id="send" class="btn" value="Відправити">
							</form>
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
			<script>
			$('#send').click (function () {
			var email = $('#email').val ();
			var name = $('#name').val ();
			var message = $('#message').val ();
			$.ajax({
				url:    	'/ajax/kontakti.php',
				type:		'POST',
				cache: 		false,
				data:   	{'name':name, 'email':email, 'message':message},
				dataType:	'html', 
			beforeSend: function () {
			$('#send').attr ("disabled", "disabled");
			},
			success: function(data) {
			if (data == true)  {
				$('#name').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("Готово");
				$('#email').css ("border-color", "#60fc8c");
				$('#name').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
			} else {
					if (data == false)
					alert ("Щось пішло не так! Повідомлення не відправлено");
					else {
					switch (data) {						
					case "Ім'я не вказано":
					$('#name').css ("border-color", "#FF0000");
					break;
					case "Повідомлення не вказано":
					$('#message').css ("border-color", "#FF0000");
					break;
					case "Неправильний e-mail":
					$('#email').css ("border-color", "#FF0000");
					break;
					default:
					$('#email').css ("border-color", "#FF0000");
					$('#message').css ("border-color", "#FF0000");
					$('#name').css ("border-color", "#FF0000");
					}
				}
			}
					$('#send').removeAttr ("disabled");
			}
			});
			});
			</script>
		</body>
	</html>