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
      $this->gameOver("lost");
      return true;
    }
  }

  // compare the base phrase with letters guessed
  // to see if user has guessed the phrase and won the game
  public function checkForWin($selected) {
    $phrase = $this->phrase->getPhrase();
    $cleanPhrase = $this->clean($phrase);
    $cleanGuesses = $this->clean($selected);
    if (count(array_diff($cleanPhrase, $cleanGuesses)) == 0) {
      $this->gameOver("won");
      return true;
    } else {
      return false;
    }
  }

  // prepare a string or array to compare to another string or array
  public function clean($entry) {
    if (gettype($entry) == "string") {
      $removeSpaces = str_replace(' ', '', $entry);
      $entry = str_split($removeSpaces);
    }
    $removeDuplicateChars = array_unique($entry);
    sort($entry);
    return $entry;
  }

  // display a win or lose message depending on the result of the game
  public function gameOver($result) {
    echo "<div class='modal' id='modal'>";
    if ($result == "won") {
      echo "<h1>You WON!</h1>
        <p>The phrase was '"
        .$this->phrase->getPhrase().
        "' </p>";
    } elseif ($result == "lost") {
       echo "<h1>OH NO!</h1>
        <p>You didn't guess '"
        .$this->phrase->getPhrase().
        "' in enough turns and you lost!</p>";
    }
    echo "<form method='post' action='play.php'>
          <input id='end' name='end' type='submit' class='btn button modal-btn' value='end' />
          </form>
          </div>";
  }

  // loop through and for each key make it a button
  // if the associated letter has already been guessed then
  // send it through the assignKeyClass method
  public function displayKeyboard() {
    $qwertyKeys = ["qwertyuiop","asdfghjkl","zxcvbnm"];
    $keyboard = count($qwertyKeys);

    for ($i = 0; $i < $keyboard; $i++) {
      echo "<div class='keyrow'>";
      foreach (str_split($qwertyKeys[$i]) as $value) {
        if (!in_array($value, $this->phrase->getSelected())) {
          echo "<input type='submit' id='$value'
            class='btn button key' name='input'
            value='".$value."'>";
        } else {
          echo $this->assignKeyClass($value);
        }
      }
      echo "</div>";
    }
  }

  public function assignKeyClass($value) {
    switch ($value) {
    case in_array($value, $this->clean($this->phrase->getPhrase())):
        return "<input type='submit' id='$value'
          class='btn button key correct'
          disabled value='".$value."'>";
        break;
    case in_array($value, $this->phrase->getSelected()):
        return "<input type='submit' id='$value'
          class='btn button key incorrect'
          disabled value='".$value."'>";
        break;
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
