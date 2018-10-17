<?php
return function($component, $matches) {
  $page = page();

  $children = children('companies');
  //$children = array_slice($children, 0, 15);

  $kreditkonto = data::set($children, [
    'kreditkonto/item.csv' => 'kreditkonto-item',
    'kreditkonto/kostnader.csv' => 'kreditkonto-kostnader',
  ]);

  $snabblan = data::set($children, [
    'snabblan/item.csv' => 'snabblan-item',
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

  $data['children'] = $merged;
  $data['headline'] = 'Nåt annat';
  $data['page'] = $current['page'];
  $data['story'] = $story['story'];

  foreach($merged as $path => $current) {
    if(isset($current['snabblan']['snabblan-item'])) {
      $items = $current['snabblan']['snabblan-item'];
      foreach($items as $name => $item) {
        if(isset($item['raw']))
          $filter[$path][$name] = $item['raw'];
      }
    } else {
      $filter[$path] = null;
    }
  }

  $Flatten = new Flatten();
  $Flatten->set($collection);
  $collection = $Flatten->get($collection);

  $f = new TinyFilters();
  $f->add('alder_min', 'same', 18);

  foreach($collection as $path => $item) {
    if(!$f->validate($item)) unset($collection[$path]);
  }

  #print_r($collection); die;

  /*$f = new TinyFilters();
  $f->add('alder_min', 'equals', 18);

  foreach($collection as $path => $child) {
    $filter = filter($child);
    $result = array_reduce($filter, 'array_merge', array());
    foreach($result as $key => $item) {
      if(!isset($item['raw'])) continue;

      $out[$key] = $item['raw'];

      if(!$f->validate($out))
      unset($collection[$path]);
    }
  }*/

  print_r($collection);

  return $data;
};

//https://stackoverflow.com/questions/3970391/how-do-i-remove-keys-from-an-array-which-are-not-in-another-array