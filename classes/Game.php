<?php

class Game {
  // private $phrase = new Phrase('yoshi is the supreme being');
  private $lives = 5;

  // private function checkForWin() {
  //
  // }
  //
  // private function gameOver() {
  //
  // }
  //
  // private function displayKeyboard() {
  //
  // }
  //
  public function displayScore() {
    $total = 5;
    $lostLives = $total - $this->lives;
    echo "<h1> hey </h1>";

    $lostHeart = <<< HTML
      <li class='tries'>
      <img src='../images/lostHeart.png' height='35px' width='30px'>
      </li>
HTML;

    $liveHeart = <<< HTML
      <li class='tries'>
      <img src='../images/liveHeart.png' height='35px' width='30px'>
      </li>
HTML;
    echo "<div id='scoreboard' class='section'>";
    echo "<ol>";
    echo str_repeat($lostHeart, $lostLives);
    echo str_repeat($liveHeart, $this->lives);
    echo "</div>";
    echo "</ol>";
  }
}



// IF
// letter is found...
// show the letter
//
// ELSE if letter not found
// turn one red heart gray
// take one life away
//
// after each turn
// check win
// check lose
//
// if win
