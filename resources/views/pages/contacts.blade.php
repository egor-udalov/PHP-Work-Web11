<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	@if($status)
		<p>Данные приняты</p>
	@endif

	<form action="/obr" method="POST">
		@csrf
		<input type="text" name="name">
		<input type="submit" value="отправить">
	</form>

</body>
</html>