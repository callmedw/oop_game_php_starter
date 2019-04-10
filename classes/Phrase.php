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


  // private function addPhraseToDisplay() {
  //
  // }

  public function checkLetter($letter) {
    if (strpos($this->currentPhrase, $letter) !== false) {
      echo "true";
    } else {
      echo "false";
    }
  }



}
