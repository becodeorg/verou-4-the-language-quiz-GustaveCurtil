<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
    <h1>Translation Quiz</h1>
    <p>English word: <strong><?= $_SESSION["Word"]->getDutchTranslation()?></strong></p>
    <form method="POST">
        <label>Translation:</label>
        <input placeholder="your answer in Dutch" name="player-answer">
        <button type="submit">Check</button>
    </form>
    <br>
    <p>Fout/Juist</p>
    <button>New word</button>

</body>
</html>