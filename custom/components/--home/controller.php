<?php
return function($component, $matches) {
  $page = 'home';

  $collector = data::set('collector/lan-home', $page);
  $format = format::set('LanMultiple', $collector);
  $filtered = filtered::set('LanMultiple', $format['lan'], $page);

  $current = array_values($format['current'])[0];
  $kategorier = array_values($format['kategorier']);

  $data = $current;
  $data['categories'] = $kategorier;
  $data['children'] = $format['lan'];
  $data['filtered'] = $filtered;
  $data['page'] = $page;
  $data['headline'] = 'Bästa lånen just nu'; // FRÅN fil
  $data['route'] = '--home';

  #print_r($data);

  return $data;
};