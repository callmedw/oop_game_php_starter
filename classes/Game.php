<?php

class Game {
  private $phrase;
  private $lives;

  public function __construct($phrase = null) {
    $this->lives = 5;
    $this->phrase = new Phrase($phrase);
  }

  public function setLives($number) {
    $this->lives = $number;
  }

  public function getLives() {
    return $this->lives;
  }

  public function getPhrase() {
    return $this->phrase;
  }

  public function checkForLose() {
    if ($this->getLives() <= 0) {
      session_destroy();
      header('location:index.php');
    }
  }

  public function checkForWin($selected) {
    $correctPhrase = str_split($this->phrase->getPhrase());
    unset($correctPhrase[null]);
    
    if ($correctPhrase == $selected) {
      echo "Both arrays are same\n";
    } else {
      echo "Both arrays are not same\n";
    }
  }

  public function displayKeyboard() {
    $qwertyKeys = ["qwertyuiop","asdfghjkl","zxcvbnm"];
    $keyboard = count($qwertyKeys);

    for ($i = 0; $i < $keyboard; $i++) {
      echo "<div class='keyrow'>";
      foreach (str_split($qwertyKeys[$i]) as $value) {
        if (!in_array($value, $this->phrase->getSelected())) {
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
