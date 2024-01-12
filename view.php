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
    <button onclick="document.location=''">Start Game</button>
    <p>English word N°<?=$_SESSION["Tries"];?> <strong><?= $_SESSION["Word"]->getDutchTranslation()?></strong></p>
    <form method="POST">
        <label>Translation:</label>
        <input placeholder="your answer in Dutch" name="player-answer">
        <button type="submit">Check</button>
    </form>
    <p>Message: <?= $_SESSION["Result"];?></p>

</body>
</html>