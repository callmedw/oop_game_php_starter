<?php

class Phrase {
  private $currentPhrase = " ";
  private $selected = [ ];

  public function __construct($phrase = null, $selected = null) {
    $this->setPhrase($phrase);
    $this->$selected[] = $selected;
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
      echo "true";
    } else {
      echo "false";
    }
  }

  public function addPhraseToDisplay() {
    echo $this->currentPhrase;
    $phrase = str_split($this->currentPhrase);
    echo "<div id='phrase' class='section'>";
    echo "<ul>";
    foreach($phrase as $character) {
      if ($character == " ") {
        echo "<li class='space'>$character</li>";
      } else {
        echo "<li class='letter'>$character</li>";
      }
    }
    echo "</ul>";
    echo "</div>";
  }
}
