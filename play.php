<?php
include "classes/Phrase.php";
include "classes/Game.php";
include "inc/header.php";

//begin session when page loads
session_start();
if (!isset($_SESSION['game'])) {
  $_SESSION['game'] = new Game();
  $_SESSION['phrase'] = $_SESSION['game']->getPhrase();
}

//set everything to empty/baseline when session starts
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

//when input received sanitize it check for match
if (isset($_POST['input'])) {
  $letter = trim(filter_var($_POST['input'], FILTER_SANITIZE_STRING));

  if (isset($letter)) {
    if ($_SESSION['phrase']->checkLetter($letter) == true) {
      $_SESSION['correctGuesses'][ ] = $letter;
      $_SESSION['game']->checkForWin($_SESSION['correctGuesses']);
    } else {
      $_SESSION['incorrectGuesses'][ ] = $letter;
      $_SESSION['lives'] --;
    }
  } else {
    echo 'Please guess by choosing a letter.';
  }

  // update state of turns and selected letters 
  $_SESSION['game']->setLives($_SESSION['lives']);
  $_SESSION['guesses'] = array_merge($_SESSION['correctGuesses'], $_SESSION['incorrectGuesses']);
  $_SESSION['phrase']->setSelected($_SESSION['guesses']);
}

// check if user has used all of their turns
$_SESSION['game']->checkForLose();

//destroy session when user clicks end button
if (isset($_POST['end'])) {
  session_destroy();
  header("Location:index.php");
  exit;
}
?>

  <div id='scoreboard' class='section'>
    <ol>
      <?php $_SESSION['game']->displayScore(); ?>
    </ol>
  </div>

  <h2 class="header">Phrase Hunter</h2>
  <div id='phrase' class='section'>
    <ul>
      <?php $_SESSION['phrase']->displayPhrase(); ?>
    </ul>
  </div>

  <form id="keyboard-form" method="post">
    <div id='qwerty' class='section'>
      <?php $_SESSION['game']->displayKeyboard(); ?>
    </div>
  </form>

<?php include "inc/footer.php"; ?>
