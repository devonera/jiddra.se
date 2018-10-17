<?php
function arrayToSentence($array, $and = '&amp;') {
  if(empty($array)) return;

  switch(count($array)) {
    case 1:
      $out = $array[0];
      break;
    case 2:
      $out = $array[0] . ' ' . $and . ' ' . $array[1];
      break;
    default:
      $pop = array_pop($array);
      $out = '';
      foreach($array as $item) {
        $out .= $item . ', ';
      }
      $out = substr($out, 0, -2) . ' ' . $and . ' ' . $pop;
      break;
  }
  return ucfirst($out); // Does not work with åäö
}