<?php
function phone_number_format($data) {
  $format = substr($data, 3);

 $three = [
  11,
  13,
  16,
  18,
  19,
  21,
  23,
  26,
  31,
  33,
  35,
  36,
  40,
  42,
  44,
  46,
  54,
  60,
  63,
  90
 ];

 if(substr($format, 0, 1) == 8) {
   $prefix = 8;
   $number = substr($format, 1);
 } elseif(in_array(substr($format, 0, 2), $three)) {
  $prefix = substr($format, 0, 2);
  $number = substr($format, 2);
 } else {
  $prefix = substr($format, 0, 3);
  $number = substr($format, 3);
 }

  $parts[] = substr($number, 0, 3);
  $parts[] = substr($number, 3, 3);
  $parts[] = substr($number, 6, 3);

 return '0' . $prefix . '-' . implode(' ', $parts);
}