<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facebook</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="max-w-md mx-auto my-20">
		<div class="shadow-lg p-5 rounded-lg flex flex-col gap-5 text-center">
			<h1 class="text-blue-700 font-bold text-xl text-center w-full">El facebook dijo</h1>
			<span>
				<?php
					echo "Chale ya te hackie :("
				?>
			</span>
			<label> Tu usuario: <?php echo $_POST['email'] ?></label>
			<label> Tu contraseña: <?php echo $_POST['pass'] ?></label>
			<hr>
			<a href="https://facebook.com" class="bg-blue-700 text-white uppercase rounded-lg px-3 py-2">Okey</a>
		</div>
	</div>
</body>
</html>
