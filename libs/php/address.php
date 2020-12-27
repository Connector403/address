<?php
  // ini_set('display_errors' , 'On');
  // error_reporting(E_ALL);

  // $lat = $_REQUEST['lat'];
  // $lng = $_REQUEST['lng'];
  $url = 'http://api.geonames.org/addressJSON?lat=' .$_REQUEST['lat'] . '&lng=' . $_REQUEST['lng'] . '&username=sherazzi403';
  // $url = 'http://api.geonames.org/addressJSON?lat='. $lat. '&lng='. $lng . '&username=sherazzi403';
  // initialize the resource
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);

  // curl_setopt($ch, CURLOPT_POSTFIELDS)
  $result = curl_exec($ch);

  curl_close($ch);
  // api returns data as json
  // print_r($result);
  // decode the json as an associative array so that we can append it to the $output
  $decode = json_decode($result,true);

  // the 'geonames' properrty from the serialized JSON is store into the 'data'
  // element of $output
  $output['data'] = $decode['address'];
  // the correct header information for json is set and $output is converted to jsobn before send it
  header('Content-Type: application/json; charset=UTF-8');
  echo json_encode ($output);
?>
