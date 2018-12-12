<?php
function thumbScreenshot($page) {
  $path_meta = path::get('meta');
  $from = sprintf("%s/companies/%s/screenshot.png", $path_meta, $page);
  $to = sprintf("%s/content/companies/%s/screenshot.png", path::get('cache'), $page);
  crop($from, $to, 900, 450, 0, 0);
}

function informationScreenshot($filename, $position = null) {
  $path_content = path::get('content');
  $from = sprintf("%s/" . $filename, $path_content);
  $to = sprintf("%s/content/" . $filename, path::get('cache'));

  crop($from, $to, 900, 450, null, $position);
}

function iconScreenshot($filename) {
  $path_content = path::get('content');
  $from = sprintf("%s/" . $filename, $path_content);

  $filename = str_replace('.jpg', '-150x150.jpg', $filename);

  $to = sprintf("%s/content/" . $filename, path::get('cache'));

  crop($from, $to, 150, 150);
}