<?php

class Phrase {
  private $currentPhrase = " ";
  private $selected = [ ];

  public function __construct($phrase = null, $selected = null) {
    $this->setPhrase($phrase);
    $this->setSelected($selected);
  }

  public function setPhrase($phrase) {
    if ($phrase) {
      $this->currentPhrase = $phrase;
    } else {
      // select random phrase
      // $this->currentPhrase = null;
    }
  }

  public function setSelected($selected) {
    if (!empty($selected)) {
      $this->selected = $selected;
    }
  }

  public function getSelected() {
    return $this->selected;
  }

  public function checkLetter($letter) {
    if (strpos($this->currentPhrase, $letter) !== false) {
      return true;
    } else {
      return false;
    }
  }

  public function displayPhrase() {
    $phrase = str_split($this->currentPhrase);
    foreach($phrase as $character) {
      if ($character == " ") {
        echo "<li class='space hide'>$character</li>";
      } elseif (in_array($character, $this->selected)) {
          echo "<li class='letter'>$character</li>";
      } else {
          echo "<li class='letter hide'>$character</li>";
      }
    }
  }
}
