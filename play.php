<?php
include "classes/Phrase.php";
include "classes/Game.php";
include "inc/header.php";

$letter = "";
$game = new Phrase("yoshi is the supreme being");
$score = new Game;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  var_dump($_GET);
  $letter = filter_input(INPUT_GET, 'letter-input', FILTER_SANITIZE_STRING);
  if (empty($letter)) {
    $message = 'Please guess by choosing a letter.';
  } else {
    if ($game->checkLetter($letter)) {
      echo "<h1> $letter </h1>";
      echo $letter;
      $message = "Letter being sent somewhere";
      header('location:play.php');
      exit;
    } else {
      echo "<h1> hey </h1>";
      $message = 'huh no letter not being sent anywhere';
      header('location:play.php');
    }
  }
  echo $message;
}
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

  <form>
    <div id='qwerty' class='section'>
      <?php $score->displayKeyboard(); ?>
    </div>
  </form>

<?php include "inc/footer.php"; ?>
