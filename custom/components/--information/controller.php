<?php
return function($component, $matches) {
  $page = page();

  $collector = data::set('collector/information', $page);
  $format = format::set('Information', $collector);

  $data = $format;
  $data['page'] = $page;

  return $data;
};