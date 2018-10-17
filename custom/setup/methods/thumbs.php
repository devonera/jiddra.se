<?php
function thumbScreenshot($page) {
  $from = sprintf("%s/companies/%s/screenshot.png", path::get('content'), $page);
  $to = sprintf("%s/content/companies/%s/screenshot.png", path::get('cache'), $page);
  crop($from, $to, 900, 450, 0, 0);
}