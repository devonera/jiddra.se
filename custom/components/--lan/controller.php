<?php
return function() {
  $page = page();
  $data = [
    'seo_title' => 'Jämför &amp; filtrera lån'
  ];

  $content = Spyc::YAMLLoad(path::get('content') . '/' . $page . '/page.txt');
  $data = $content;
  $data['route'] = '--lan';

  return $data;
};