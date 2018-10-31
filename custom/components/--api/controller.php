<?php
return function($component, $matches) {
  $page = page();

  $collector = data::set('collector/lan-multiple', $page);
  $format = format::set('LanMultiple', $collector);
  $filtered = filtered::set('LanMultiple', $format['lan'], $page);

  $data['children'] = $format['lan'];
  $data['filtered'] = $filtered;
  $data['page'] = $page;
  $data['headline'] = 'Resultat'; // FRÅN fil
  $data['route'] = '--article';

  return $data;
};