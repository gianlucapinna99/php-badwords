<!DOCTYPE html>
<html>
<head>
	<title>PHP Badwords</title>
</head>
<body>
	<h1>PHP Badwords</h1>
	<form action="badwords.php" method="post">
		<label for="paragraph">Inserisci il paragrafo:</label><br>
		<textarea id="paragraph" name="paragraph" rows="10" cols="50"></textarea><br>
		<label for="word">Inserisci la parola da censurare:</label><br>
		<input type="text" id="word" name="word"><br><br>
		<input type="submit" value="Censura">
	</form>
</body>
</html>