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

  public function displayKeyboard() {
    $qwertyKeys = ["qwertyuiop","asdfghjkl","zxcvbnm"];
    $keyboard = count($qwertyKeys);

    for ($i = 0; $i < $keyboard; $i++) {
      echo "<div class='keyrow'>";
      foreach (str_split($qwertyKeys[$i]) as $value) {
        if (!in_array($value, ["e", "q"])) {
          echo "<input type='submit' class='btn button' class='key' value='".$value."'>";
        } else {
          echo "<input type='submit' class='btn button' class='key' style='background-color: red' disabled value='".$value."'>";
        }
      }
      echo "</div>";
    }
  }

  public function displayScore() {
    $total = 5;
    $lostLives = $total - $this->lives;

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
