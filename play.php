<?php
include "classes/Phrase.php";
include "classes/Game.php";
include "inc/header.php";

session_start();
$game = new Game("yoshi is the supreme being");
$phrase = $game->getPhrase();

if (!isset($_SESSION['guesses'])) {
  $_SESSION['guesses'] = [];
}

if (!isset($_SESSION['correctGuesses'])) {
  $_SESSION['correctGuesses'] = [];
}

if (!isset($_SESSION['incorrectGuesses'])) {
  $_SESSION['incorrectGuesses'] = [];
}

if(!isset($_SESSION['lives'])) {
  $_SESSION['lives'] = 5;
}

if ($_POST['input']) {

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $letter = $_POST['input'];

  if (isset($letter)) {
    if ($phrase->checkLetter($letter) == true) {
      $_SESSION['correctGuesses'][ ] = $letter;
      // $phrase->setSelected($_SESSION['guesses']);
      $game->checkForWin($_SESSION['correctGuesses']);
    } else {
      $_SESSION['incorrectGuesses'][ ] = $letter;
      $_SESSION['lives'] --;
      // $game->setLives($_SESSION['lives']);
    }
  } else {
    echo 'Please guess by choosing a letter.';
  }
  $game->setLives($_SESSION['lives']);
  $_SESSION['guesses'] = array_merge($_SESSION['correctGuesses'], $_SESSION['incorrectGuesses']);
  $phrase->setSelected($_SESSION['guesses']);
}

$game->checkForLose();


?>

<a href="index.php">home</a>


  <div id='scoreboard' class='section'>
    <ol>
      <?php $game->displayScore(); ?>
    </ol>
  </div>

  <h2 class="header">Phrase Hunter</h2>
  <div id='phrase' class='section'>
    <ul>
      <?php $phrase->displayPhrase(); ?>
    </ul>
  </div>

  <form method="post">
    <div id='qwerty' class='section'>
      <?php $game->displayKeyboard(); ?>
    </div>
  </form>

<?php include "inc/footer.php"; ?>
