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

route("meta/assets/(.*)\.(jpg|jpeg|png|gif|svg|js|css|txt)$", function($matches) {
  $folder = $matches[1];
  $Mimetype = new Mimetype();
  $mime = $Mimetype->get($matches[2]);

  if(!$Mimetype->isMedia($matches[2])) return;
  $filepath = root() . '/../meta/' . $matches[1] . '.' . $matches[2];

  //http://localhost/io/sites/jiddra.se/meta/assets/companies/vivus/screenshot.png

  header("Content-Type: $mime");

  if(file_exists($filepath)) {
    readfile($filepath);
  }
  die;
});