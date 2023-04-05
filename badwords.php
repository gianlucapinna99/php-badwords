<!DOCTYPE html>
<html>
<head>
	<title>PHP Badwords - Risultati</title>
</head>
<body>
	<h1>PHP Badwords - Risultati</h1>
	<?php
		// Leggi i dati inviati dal form
		$paragraph = $_POST["paragraph"];
		$word = $_POST["word"];

		// Stampa il paragrafo e la sua lunghezza
		echo "<p>" . $paragraph . "</p>";
		echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";

		// Sostituisci la parola da censurare con tre asterischi
		$censored_paragraph = str_ireplace($word, '***', $paragraph);

		// Stampa il paragrafo censurato e la sua lunghezza
		echo "<p>" . $censored_paragraph . "</p>";
		echo "<p>Lunghezza: " . strlen($censored_paragraph) . " caratteri</p>";
	?>
</body>
</html>