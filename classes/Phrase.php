<?php

class Phrase {
  private $currentPhrase = " ";
  private $selected = [ ];

  public function __construct($phrase = null, $selected = null) {
    $this->setPhrase($phrase);
    if ($selected != null) {
      $this->selected = $selected;
    } else {
      $this->$selected[] = $selected;
    }
  }

  public function setPhrase($phrase) {
    if ($phrase) {
      $this->currentPhrase = $phrase;
    } else {
      include_once "inc/data.php";
      $this->currentPhrase = htmlspecialchars(callApiForPhrase());
    }
  }

  public function setSelected($selected) {
    return $this->selected = $selected;
  }

  public function getPhrase() {
    return $this->currentPhrase;
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
