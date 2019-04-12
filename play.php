<?php
include "classes/Phrase.php";
include "classes/Game.php";
include "inc/header.php";

session_start();
$phrase = new Phrase("yoshi is the supreme being");
$game = new Game($phrase);

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
    $_SESSION['guesses'][] = $letter;
    if ($phrase->checkLetter($letter) == true) {
      $_SESSION['correctGuesses'][ ] = $letter;
    } else {
      echo "<h1>". $_SESSION['lives'] ."</h1>";
      $_SESSION['lives'] - 1;
      echo "<h1>". $_SESSION['lives'] ."</h1>";
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
