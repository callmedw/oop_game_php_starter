<?php

class Game {
  // private $phrase = new Phrase('yoshi is the supreme being');
  private $lives = 5;
  private $wrongGuesses =  [ ];
  private $correctGuesses = [ ];

  // private function checkForWin() {
  //
  // }
  //
  // private function gameOver() {
  //
  // }

  public function displayKeyboard() {
    // need to connect a selectedValues array not ["e", "q"]
    $qwertyKeys = ["qwertyuiop","asdfghjkl","zxcvbnm"];
    $keyboard = count($qwertyKeys);

    for ($i = 0; $i < $keyboard; $i++) {
      echo "<div class='keyrow'>";
      foreach (str_split($qwertyKeys[$i]) as $value) {
        // HERE >>>>>>>>>>>>>>> |
        if (!in_array($value, ["e", "q"])) {
          echo "<input
            type='submit'
            id='letter-input'
            name='input'
            class='btn button'
            class='key'
            value='".$value."'>";
        } else {
          echo "<input
            type='submit'
            class='btn button key'
            style='background-color: red'
            disabled
            value='".$value."'>";
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
      <img src='images/lostHeart.png' height='35px' width='30px'>
      </li>
HTML;

    $liveHeart = <<< HTML
      <li class='tries'>
      <img src='images/liveHeart.png' height='35px' width='30px'>
      </li>
HTML;

    echo str_repeat($lostHeart, $lostLives);
    echo str_repeat($liveHeart, $this->lives);
  }
}


// get letter input
// IF
// letter is found...
// show the letter
//
// ELSE if letter not found
// take one life away
//
// after each turn
// check win
// check lose
//
// if win
