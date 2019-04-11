<?php
include "classes/Phrase.php";
include "classes/Game.php";
include "inc/header.php";

$game = new Phrase("yoshi is the supreme being");
$score = new Game;
?>

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

<?php include "inc/footer.php"; ?>
