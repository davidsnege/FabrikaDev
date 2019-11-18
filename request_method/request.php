<?php
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    //Here Handle GET Request
    echo 'You are using '.$method.' Method';
    break;
  case 'POST':
    //Here Handle POST Request
    echo 'You are using '.$method.' Method';
    break;
  case 'PUT':
    //Here Handle PUT Request
    echo 'You are using '.$method.' Method';
    break;
  case 'PATCH':
    //Here Handle PATCH Request
    echo 'You are using '.$method.' Method';
    break;
  case 'DELETE':
    //Here Handle DELETE Request
    echo 'You are using '.$method.' Method';
    break;
  case 'COPY':
      //Here Handle COPY Request
      echo 'You are using '.$method.' Method';
      break;
  case 'OPTIONS':
      //Here Handle OPTIONS Request
      echo 'You are using '.$method.' Method';
      break;
  case 'LINK':
      //Here Handle LINK Request
      echo 'You are using '.$method.' Method';
      break;
  case 'UNLINK':
      //Here Handle UNLINK Request
      echo 'You are using '.$method.' Method';
      break;
  case 'PURGE':
      //Here Handle PURGE Request
      echo 'You are using '.$method.' Method';
      break;
  case 'LOCK':
      //Here Handle LOCK Request
      echo 'You are using '.$method.' Method';
      break;
  case 'UNLOCK':
      //Here Handle UNLOCK Request
      echo 'You are using '.$method.' Method';
      break;
  case 'PROPFIND':
      //Here Handle PROPFIND Request
      echo 'You are using '.$method.' Method';
      break;
  case 'VIEW':
      //Here Handle VIEW Request
      echo 'You are using '.$method.' Method';
      break;
  default:
    echo 'You are using '.$method.' Method';
  break;
}


?>
