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
      return true;
    }
  }

  public function checkForWin($selected) {
    $phrase = $this->phrase->getPhrase();
    $cleanPhrase = $this->clean($phrase);
    $cleanGuesses = $this->clean($selected);
    if (count(array_diff($cleanPhrase, $cleanGuesses)) == 0) {
      return true;
    } else {
      return false;
    }
  }

  public function clean($entry) {
    if (gettype($entry) == "string") {
      $removeSpaces = str_replace(' ', '', $entry);
      $entry = str_split($removeSpaces);
    }
    $removeDuplicateChars = array_unique($entry);
    sort($entry);
    return $entry;
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
