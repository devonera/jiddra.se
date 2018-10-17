<?php
function interval($keys, $haystack = [], $suffix = 'kr') {
  $out = '';

  if(isset($haystack[$keys[0]]['raw'])) $min = number_format($haystack[$keys[0]]['raw'], 0, ' ', ' ');
  if(isset($haystack[$keys[1]]['raw'])) $max = number_format($haystack[$keys[1]]['raw'], 0, ' ', ' ');

  if(isset($min) && isset($max)) {
    $out = $min . ' - ' . $max . ' ' . $suffix;
  } elseif(isset($min) || isset($max)) {
    $out = $min . $max . ' ' . $suffix;
  }

  return $out;
}

function minmax($min = null, $max = null, $suffix = 'kr') {
  $out = '';

  $min = (is_numeric($max)) ? number_format($min, 0, ' ', ' ') : null;
  $max = (is_numeric($max)) ? number_format($max, 0, ' ', ' ') : null;

  if(isset($min) && isset($max)) {
    $out = $min . ' - ' . $max . ' ' . $suffix;
  } elseif(isset($min) || isset($max)) {
    $out = $min . $max . ' ' . $suffix;
  }

  return $out;
}