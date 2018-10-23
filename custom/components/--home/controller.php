<?php
return function($component, $matches) {
  /*$children = children('companies');
  $children = array_slice($children, 0, 5);

  $children = [
    path::fromUri('companies/vivus'),
    path::fromUri('companies/ferratum'),
    path::fromUri('companies/natlan'),
    path::fromUri('companies/meddelandelan'),
    path::fromUri('companies/loanstep'),
  ];

  $kreditkonto = data::set($children, [
    'kreditkonto/item.csv' => 'kreditkonto-item',
    'kreditkonto/kostnader.csv' => 'kreditkonto-kostnader',
  ]);

  $snabblan = data::set($children, [
    'snabblan/item.csv' => 'snabblan-item',
    'snabblan/kostnader.csv' => 'snabblan-kostnader',
  ]);

  $page_data = filter(data::set(path::fromUri('home'), [
    'home.txt' => 'page',
  ]));

  $company = data::set($children, [
    'company.txt' => 'page',
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
  $data['headline'] = 'Bästa lånen just nu';
  $data['page'] = $page_data['page'];

  #print_r($data);
  #die;

  return $data;*/

  $callback = include __DIR__ . '/../--article/controller.php';
  return $callback($component, $matches, 'home');
};