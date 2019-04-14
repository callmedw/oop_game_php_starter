<?php

function callApiForPhrase() {
  try {
    include_once "connection.php";
    $url = "http://puzzle.mead.io/puzzle?wordCount=4";
    $response = json_decode(getApiData($url), true);
  } catch(Exception $e) {
    echo $e->getMessage();
  }
  $cleanResponse = trim(filter_var($response['puzzle'], FILTER_SANITIZE_STRING));
  $cleanResponse;
  return $cleanResponse;
}
