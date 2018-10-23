<?php
function outsideChildren($uri = 'companies') {
  $pattern = path::get('root') . '/../meta/' . $uri . '/[!_]*';
  $glob = glob($pattern, GLOB_ONLYDIR);
  return $glob;
}