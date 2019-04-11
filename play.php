<?php
include "classes/Phrase.php";
include "classes/Game.php";

$game = new Phrase("yoshi is the supreme being");
$score = new Game;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Phrase Hunter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>
	<body>

		<div class="main-container">
      <div id='scoreboard' class='section'>
        <ol>
          <?php $score->displayScore(); ?>
        </ol>
      </div>

			<h2 class="header">Phrase Hunter</h2>
      <div id='phrase' class='section'>
        <ul>
          <?php $game->addPhraseToDisplay(); ?>
        </ul>
      </div>

      <form action="play.php">
        <div id='qwerty' class='section'>
          <?php $score->displayKeyboard(); ?>
        </div>
      </form>
		</div>

	</body>
</html>
