<?php

class Phrase {
  private $currentPhrase = " ";
  private $selected = [ ];

  public function __construct($phrase = null, $selected) {
    $this->setPhrase($phrase);
    $this->$selected[] = $selected;
  }

  public function setPhrase($phrase) {
    if (empty($phrase)) {
      $this->phrase = ucwords($phrase);
    } else {
      // select random phrase
      $this->phrase = null;
    }
  }


  // private function addPhraseToDisplay() {
  //
  // }
  //
  // private function checkLetter() {
  //
  // }

}
