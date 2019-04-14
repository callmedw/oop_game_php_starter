<?php
function getApiData($url) {
  try {
    $request = curl_init();

    curl_setopt_array($request, array(
      CURLOPT_URL => "$url",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => "",
    ));

    $status_code = curl_getinfo($request, CURLINFO_HTTP_CODE);
    $response = curl_exec($request);
    $error = curl_error($request);
    curl_close($request);
  } catch (Exception $e) {
  echo $e->getMessage();
  exit;
  }

  if ($error) {
    return $error;
  } elseif ($status_code) {
    return $status_code;
  } else {
    return $response;
  }
}
