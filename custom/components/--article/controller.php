<?php
return function($component, $matches, $page = null) {
  $page = !isset($page) ? page() : $page;

  //$children = children('companies');
  $children = outsideChildren('companies');
  //$children = array_slice($children, 0, 15);

  $kreditkonto = data::set($children, [
    'kreditkonto/item.csv' => 'kreditkonto-item',
    'kreditkonto/kostnader.csv' => 'kreditkonto-kostnader',
  ]);

  $snabblan = data::set($children, [
    'snabblan/item.csv' => 'snabblan-item',
    'snabblan/kostnader.csv' => 'snabblan-kostnader',
  ]);

  $current = data::set(path::get('content') . '/articles/' . $page, [
    'article.txt' => 'page',
  ]);

  $company = data::set($children, [
    'company.txt' => 'page',
    'info.csv' => 'info',
    'krav.csv' => 'krav',
    'weekdays.csv' => 'weekdays',
  ]);

  $collection = data::set($children, [
    'info.csv' => 'info',
    'krav.csv' => 'krav',
    'kontakt.csv' => 'kontakt',
    'weekdays.csv' => 'weekdays',
  ]);

  $story = data::set(path::fromUri('articles/' . $page), [
    'story.md' => 'story'
  ]);

  if(!empty($kreditkonto)) $services['kreditkonto'] = $kreditkonto;
  if(!empty($snabblan)) $services['snabblan'] = $snabblan;

  $merged = [];

  foreach($children as $child) {
    if(isset($services)) {
      foreach($services as $type => $pages) {
        if(isset($pages[$child])) {
          $merged[$child][$type] = filter($pages[$child]);
        }
      }
    }
    $merged[$child]['page'] = $company[$child]['page'];
  }

  $Flatten = new Flatten();

  $Flatten->set($collection);
  $collection = $Flatten->get($collection);

  $services = vHelpers::flattenServices($services);
  $collection = array_merge_recursive($collection, $services);


  $collection = vHelpers::filter($page, $collection);

  $data['children'] = $merged;
  $data['headline'] = 'Nåt annat';
  $data['page'] = $current['page'];
  $data['story'] = $story['story'];
  $data['filtered'] = $collection;

  $data['route'] = '--article';

  return $data;
};

//https://stackoverflow.com/questions/3970391/how-do-i-remove-keys-from-an-array-which-are-not-in-another-array