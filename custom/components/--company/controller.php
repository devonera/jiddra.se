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

  $company_path = root() . '/../meta/companies/' . $page;

  // Raw data
  $collection = filter(data::set($company_path, [
    'info.csv' => 'info',
    'kontakt.csv' => 'kontakt',
    'krav.csv' => 'krav',
    'quotes.csv' => 'quotes',
    'service.csv' => 'service',
    'weekdays.csv' => 'weekdays',
  ]));

  $story = data::set($company_path, [
    'story.md' => 'story'
  ]);

  $page_data = filter(data::set($company_path, [
    'company.txt' => 'page',
  ]));

  $kreditkonto = filter(data::set($company_path, [
    'kreditkonto/item.csv' => 'kreditkonto-item',
    'kreditkonto/kostnader.csv' => 'kreditkonto-kostnader',
  ]));

  $snabblan = filter(data::set($company_path, [
    'snabblan/item.csv' => 'snabblan-item',
    'snabblan/kostnader.csv' => 'snabblan-kostnader',
  ]));

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

  return $data;
};