<?php
route("assets/:any/(.*)\.(jpg|jpeg|png|gif|svg|js|css|txt)$", function($matches) {
  $folder = $matches[1];
  $Mimetype = new Mimetype();
  $mime = $Mimetype->get($matches[3]);

  if(!$Mimetype->isMedia($matches[3])) return;
  $filepath = path::get($folder) . '/' . $matches[2] . '.' . $matches[3];

  header("Content-Type: $mime");

  if(file_exists($filepath)) {
    readfile($filepath);
  }
  die;
});