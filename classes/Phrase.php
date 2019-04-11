<?php

class Phrase {
  private $currentPhrase = " ";
  private $selected = [ ];
  private $wrongGuesses =  [ ];
  private $correctGuesses = [ ];

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
    // need to connect with scoreboard
    if (strpos($this->currentPhrase, $letter) !== false) {
      $this->correctGuesses[ ] = $letter;
      return "true";
    } else {
      $this->wrongGuesses[ ] = $letter;
      return "false";
    }
  }

  public function addPhraseToDisplay() {
    $phrase = str_split($this->currentPhrase);
    foreach($phrase as $character) {
      if ($character == " ") {
        echo "<li class='space hide'>$character</li>";
      } else {
        echo "<li class='letter hide'>$character</li>";
      }
    }
  }
}
