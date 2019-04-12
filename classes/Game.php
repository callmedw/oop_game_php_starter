<?php

class Game {
  private $phrase;
  private $lives;

  // private function checkForWin() {
  //
  // }
  //
  // private function gameOver() {
  //
  // }

  public function __construct($phrase = null) {
    $this->lives = 5;
    $this->phrase = new Phrase($phrase);
  }

  public function getLives() {
    return $this->lives;
  }

  public function getPhrase() {
    return $this->phrase;
  }

  public function displayKeyboard() {
    //interested in calling $phrase->selected in place of $_SESSION['guesses'] on line 23
    $qwertyKeys = ["qwertyuiop","asdfghjkl","zxcvbnm"];
    $keyboard = count($qwertyKeys);

    for ($i = 0; $i < $keyboard; $i++) {
      echo "<div class='keyrow'>";
      foreach (str_split($qwertyKeys[$i]) as $value) {
        if (!in_array($value, $_SESSION['guesses'])) {
          echo "<input type='submit' id='letter-input'
            name='input' class='btn button'
            type 'text'
            class='key' value='".$value."'>";
        } else {
          echo "<input type='submit'
            class='btn button key'
            style='background-color: red'
            disabled value='".$value."'>";
        }
      }
      echo "</div>";
    }
  }

  public function displayScore() {
    $total = 5;
    $lostLives = $total - $this->getLives();

    $lostHeart =
      "<li class='tries'>
      <img src='images/lostHeart.png' height='35px' width='30px'>
      </li>";

    $liveHeart =
      "<li class='tries'>
      <img src='images/liveHeart.png' height='35px' width='30px'>
      </li>";

    echo str_repeat($lostHeart, $lostLives);
    echo str_repeat($liveHeart, $this->getLives());
  }
}

// ELSE if letter not found
// take one life away
//
// after each turn
// check win
// check lose
