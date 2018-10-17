<?php
function numberout(string $input) {
  $hash = md5($input);
  $calculate = hexdec(substr($hash,0,3));
  $maxhex = 4095;
  $out = $calculate * 10 / $maxhex;
  return (int)$out;
}