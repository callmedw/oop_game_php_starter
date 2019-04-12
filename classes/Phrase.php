<?php
// $_SESSION['correctGuesses'] on line 38 (also ten? I'm confused as to what selected is supposed to be here?)

class Phrase {
  private $currentPhrase = " ";
  private $selected = [ ];

  public function __construct($phrase = null, $selected = null) {
    $this->setPhrase($phrase);
    $this->$selected[] = $selected;
  }

  public function getSelected() {
    return $this->selected;
  }

  public function setPhrase($phrase) {
    if ($phrase) {
      $this->currentPhrase = $phrase;
    } else {
      // select random phrase
      // $this->currentPhrase = null;
    }
  }

  public function checkLetter($letter) {
    if (strpos($this->currentPhrase, $letter) !== false) {
      return true;
    } else {
      return false;
    }
  }

  public function addPhraseToDisplay() {
    $phrase = str_split($this->currentPhrase);
    foreach($phrase as $character) {
      if ($character == " ") {
        echo "<li class='space hide'>$character</li>";
      } elseif (in_array($character, $_SESSION['correctGuesses'])) {
          echo "<li class='letter'>$character</li>";
      } else {
          echo "<li class='letter hide'>$character</li>";
      }
    }
  }

  public function testPhraseToDisplay() {
    $phrase = str_split($this->currentPhrase);
    foreach($phrase as $character) {
      if ($character == " ") {
        echo " $character ";
      } else {
        echo " $character ";
      }
    }
  }
}
