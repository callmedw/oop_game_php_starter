<?php
include "classes/Phrase.php";
include "classes/Game.php";
include "inc/header.php";

session_start();
$game = new Game("yoshi is the supreme being");
$phrase = $game->getPhrase();
$_SESSION['guesses'] = array_merge($_SESSION['correctGuesses'], $_SESSION['incorrectGuesses']);

if (!isset($_SESSION['correctGuesses'])) {
  $_SESSION['correctGuesses'] = [];
}

if (!isset($_SESSION['incorrectGuesses'])) {
  $_SESSION['incorrectGuesses'] = [];
}

if(!isset($_SESSION['lives'])) {
  $_SESSION['lives'] = 5;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $letter = $_POST['input'];

  if (isset($letter)) {
    if ($phrase->checkLetter($letter) == true) {
      $_SESSION['correctGuesses'][ ] = $letter;
    } else {
      $_SESSION['incorrectGuesses'][ ] = $letter;
    }

  } else {
    echo 'Please guess by choosing a letter.';
  }
}
?>

  <div id='scoreboard' class='section'>
    <ol>
      <?php $game->displayScore(); ?>
    </ol>
  </div>

  <h2 class="header">Phrase Hunter</h2>
  <div id='phrase' class='section'>
    <ul>
      <?php $phrase->addPhraseToDisplay(); ?>
    </ul>
  </div>

  <form method="post">
    <div id='qwerty' class='section'>
      <?php $game->displayKeyboard(); ?>
    </div>
  </form>

<?php include "inc/footer.php"; ?>
