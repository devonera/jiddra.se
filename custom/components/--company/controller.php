<?php
return function($component, $matches) {
  $page = page();

  $headings = [
    'kreditkonto' => 'Kreditkonto',
    'kreditkonto-item' => 'Belopp &amp; tid',
    'kreditkonto-kostnader' => 'Kostnader',
    'snabblan' => 'Snabblån',
    'snabblan-item' => 'Belopp &amp; tid',
    'snabblan-kostnader' => 'Kostnader',
  ];

  // Raw data
  $collection = filter(data::set(path::fromUri('companies/' . $page), [
    'info.csv' => 'info',
    'kontakt.csv' => 'kontakt',
    'krav.csv' => 'krav',
    'quotes.csv' => 'quotes',
    'service.csv' => 'service',
    'weekdays.csv' => 'weekdays',
  ]));

  $story = data::set(path::fromUri('companies/' . $page), [
    'story.md' => 'story'
  ]);

  $page_data = filter(data::set(path::fromUri('companies/' . $page), [
    'company.txt' => 'page',
  ]));

  $kreditkonto = filter(data::set(path::fromUri('companies/' . $page), [
    'kreditkonto/item.csv' => 'kreditkonto-item',
    'kreditkonto/kostnader.csv' => 'kreditkonto-kostnader',
  ]));

  $snabblan = filter(data::set(path::fromUri('companies/' . $page), [
    'snabblan/item.csv' => 'snabblan-item',
    'snabblan/kostnader.csv' => 'snabblan-kostnader',
  ]));

  #print_r($snabblan);

  if(!empty($kreditkonto)) $services['kreditkonto'] = $kreditkonto;
  if(!empty($snabblan)) $services['snabblan'] = $snabblan;
  
  // Thumb screenshot generation
  thumbScreenshot($page);

  $data['screenshot'] = url(sprintf('assets/cache/content/companies/%s/screenshot.png', $page));

  $data['data'] = $collection;

  $data['page'] = $page_data['page'];
  $data['story'] = $story['story'];
  if(isset($services)) {
    $data['services'] = $services;
  }
  $data['headings'] = $headings;

  #print_r($data);
  #die;

  return $data;
};