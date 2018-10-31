<?php
function slug($string) {
  return strtolower(
    trim(
      preg_replace(
          '~[^0-9a-z]+~i',
          '-',
          html_entity_decode(
          preg_replace(
              '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i',
              '$1',
              htmlentities(
              $string,
              ENT_QUOTES,
              'UTF-8'
              )
          ),
          ENT_QUOTES,
          'UTF-8'
          )
      ),
      '-'
      )
  );
}

function services($uri = 'companies/vivus') {
  $folder_uri = path::get('content') . '/' . $uri;

  $services = [
    'kreditkonto' => 'Kreditkonto',
    'snabblan' => 'Snabblån'
  ];

  $data = [];

  foreach($services as $name => $title) {
    if(file_exists($folder_uri . '/' . $name)) {
      $file_uri = $folder_uri . '/' . $name . '/item.csv';

      if(file_exists($file_uri)) {
        $itempath = $uri . '/' .  $name . '/item.csv';

        if(file_exists(path::get('content') . '/' . $itempath)) {
          $sdata['item']['title'] = 'Belopp &amp; tid';

          $sdata['item']['data'] = csv::pairs($itempath);

          $sdata['item']['data']['ny_kund_belopp'] = interval(['ny_kund_min_belopp', 'ny_kund_max_belopp'], $sdata['item']['data']);
          $sdata['item']['data']['befintlig_kund_belopp'] = interval(['befintlig_kund_min_belopp', 'befintlig_kund_max_belopp'], $sdata['item']['data']);
          $sdata['item']['data']['gratis_kund_belopp'] = interval(['gratis_min_belopp', 'gratis_max_belopp'], $sdata['item']['data']);

          $unset= [
            'ny_kund_min_belopp',
            'ny_kund_max_belopp',
            'befintlig_kund_min_belopp',
            'befintlig_kund_max_belopp',
            'gratis_min_belopp',
            'gratis_max_belopp'
          ];

          foreach($unset as $unset_item) {
            unset($sdata['item']['data'][$unset_item]);
          }
        }

        $kostnaderpath = $uri . '/' .  $name . '/kostnader.csv';

        if(file_exists(path::get('content') . '/' . $kostnaderpath)) {
          $sdata['kostnader']['title'] = 'Kostnader';
          $sdata['kostnader']['data'] = csv::pairs($kostnaderpath);

          foreach($unset as $unset_item) {
            unset($sdata['item']['data'][$unset_item]);
          }
        }

        $data[$name]['title'] = $title;
        $data[$name]['blocks'] = $sdata;
      }
    }
  }

  return $data;
}