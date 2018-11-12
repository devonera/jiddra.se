<?php
function thumbScreenshot($page) {
  $path_meta = path::get('meta');
  $from = sprintf("%s/companies/%s/screenshot.png", $path_meta, $page);
  $to = sprintf("%s/content/companies/%s/screenshot.png", path::get('cache'), $page);
  crop($from, $to, 900, 450, 0, 0);
}